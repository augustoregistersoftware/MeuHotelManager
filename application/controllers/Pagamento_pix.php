<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagamento_pix extends CI_Controller {


	public function index()
	{
    $this->load->view('templates/header');
	$this->load->view('templates/navbar');
    $this->load->view('templates/sidebarsettings');
	$this->load->view('pages/cadastro_cobranca_pix');
    $this->load->view('templates/footer');
        
    return $this;
	}

    public function simpleQRCode($text, $size = 1000) {
        $size = escapeshellarg($size);
        $text = escapeshellarg($text);  // Assegura que o texto é seguro para ser processado
        
        $svgCode = '<svg xmlns="http://www.w3.org/2000/svg" width="'.$size.'" height="'.$size.'" viewBox="0 0 21 21">';
        for ($i = 0; $i < strlen($text); $i++) {
            $x = ($i % 3) * 7;  // Posição X baseada no índice do caractere
            $y = intval($i / 3) * 7;  // Posição Y baseada no índice do caractere
            $color = (ord($text[$i]) % 2 === 0) ? '#000' : '#fff';  // Cor alternada
            $svgCode .= '<rect x="'.$x.'" y="'.$y.'" width="7" height="7" fill="'.$color.'"/>';
        }
        $svgCode .= '</svg>';
        return $svgCode;
    }
    
    public function gerarqrcode()
    {
        
        $pixKey = $_POST['pixkey'];
        $descricao = $_POST['descricao'];
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $valor = $_POST['valor'];
        $valorpix = (string)number_format($valor,2,'.','');
        $identificador= '***';

        $px[00]="01"; //Payload Format Indicator, Obrigatório, valor fixo: 01
         // Se o QR Code for para pagamento único (só puder ser utilizado uma vez), descomente a linha a seguir.
         //$px[01]="12"; //Se o valor 12 estiver presente, significa que o BR Code só pode ser utilizado uma vez. 
         $px[26][00]="br.gov.bcb.pix"; //Indica arranjo específico; “00” (GUI) obrigatório e valor fixo: br.gov.bcb.pix
         $px[26][01]=$pixKey;
         if (!empty($descricao)) {
            /* 
            Não é possível que a chave pix e infoAdicionais cheguem simultaneamente a seus tamanhos máximos potenciais.
            Conforme página 15 do Anexo I - Padrões para Iniciação do PIX  versão 1.2.006.
            */
            $tam_max_descr=99-(4+4+4+14+strlen($pixKey));
            if (strlen($descricao) > $tam_max_descr) {
               $descricao=substr($descricao,0,$tam_max_descr);
            }
            $px[26][02]=$descricao;
         }
         $px[52]="0000"; //Merchant Category Code “0000” ou MCC ISO18245
         $px[53]="986"; //Moeda, “986” = BRL: real brasileiro - ISO4217
         if ($valorpix > 0) {
            // Na versão 1.2.006 do Anexo I - Padrões para Iniciação do PIX estabelece o campo valor (54) como um campo opcional.
            $px[54]=$valorpix;
         }
         $px[58]="BR"; //“BR” – Código de país ISO3166-1 alpha 2
         $px[59]=$nome; //Nome do beneficiário/recebedor. Máximo: 25 caracteres.
         $px[60]=$cidade; //Nome cidade onde é efetuada a transação. Máximo 15 caracteres.
         $px[62][05]=$identificador;
      //   $px[62][50][00]="BR.GOV.BCB.BRCODE"; //Payment system specific template - GUI
      //   $px[62][50][01]="1.2.006"; //Payment system specific template - versão
         $pix=$this->montaPix($px);
         $pix.="6304"; //Adiciona o campo do CRC no fim da linha do pix.
         $pix.= $this->crcChecksum($pix);
         $chavefinal['valor'] =$valorpix;
         $chavefinal['chavefinal'] =$pix;

         $qrCodeSVG = $this->simpleQRCode($chavefinal['chavefinal']);
    
         $chavefinal['qrcode_svg'] = $qrCodeSVG;
         
         $chavefinal['title'] = 'Chave Pix';
         

       $this->load->view('templates/header',$chavefinal);
       $this->load->view('templates/navbar',$chavefinal);  
       $this->load->view('templates/sidebarsettings');
       $this->load->view('pages/pagamento_pix',$chavefinal);
       $this->load->view('templates/footer',$chavefinal);
    }

    function montaPix($px){
      /*
      # Esta rotina monta o código do pix conforme o padrão EMV
      # Todas as linhas são compostas por [ID do campo][Tamanho do campo com dois dígitos][Conteúdo do campo]
      # Caso o campo possua filhos esta função age de maneira recursiva.
      #
      */
      $ret="";
      foreach ($px as $k => $v) {
        if (!is_array($v)) {
           if ($k == 54) { $v=number_format($v,2,'.',''); } // Formata o campo valor com 2 digitos.
           else { $v=$this->remove_char_especiais($v); }
           $ret.=$this->c2($k).$this->cpm($v).$v;
        }
        else {
          $conteudo=$this->montaPix($v);
          $ret.=$this->c2($k).$this->cpm($conteudo).$conteudo;
        }
      }
      return $ret;
   }

   function cpm($tx){
      /*
      # Esta função auxiliar retorna a quantidade de caracteres do texto $tx com dois dígitos.
      #
      */
      if (strlen($tx) > 99) {
        die("Tamanho máximo deve ser 99, inválido: $tx possui " . strlen($tx) . " caracteres.");
      }
 
      return $this->c2(strlen($tx));
  }
   
  function c2($input){
      /*
      # Esta função auxiliar trata os casos onde o tamanho do campo for < 10 acrescentando o
      # dígito 0 a esquerda.
      #
      */
      return str_pad($input, 2, "0", STR_PAD_LEFT);
  }

   function remove_char_especiais($txt){
      /*
      # Esta função retorna somente os caracteres alfanuméricos (a-z,A-Z,0-9) de uma string.
      # Caracteres acentuados são convertidos pelos equivalentes sem acentos.
      # Emojis são removidos, mantém espaços em branco.
      #

      */
      return preg_replace('/\W /','',$this->remove_acentos($txt));
   }

   function remove_acentos($texto){
      /*
      # Esta função retorna uma string substituindo os caracteres especiais de acentuação
      # pelos respectivos caracteres não acentuados em português-br.
      #
      */
      $search = explode(",","à,á,â,ä,æ,ã,å,ā,ç,ć,č,è,é,ê,ë,ē,ė,ę,î,ï,í,ī,į,ì,ł,ñ,ń,ô,ö,ò,ó,œ,ø,ō,õ,ß,ś,š,û,ü,ù,ú,ū,ÿ,ž,ź,ż,À,Á,Â,Ä,Æ,Ã,Å,Ā,Ç,Ć,Č,È,É,Ê,Ë,Ē,Ė,Ę,Î,Ï,Í,Ī,Į,Ì,Ł,Ñ,Ń,Ô,Ö,Ò,Ó,Œ,Ø,Ō,Õ,Ś,Š,Û,Ü,Ù,Ú,Ū,Ÿ,Ž,Ź,Ż");
      $replace =explode(",","a,a,a,a,a,a,a,a,c,c,c,e,e,e,e,e,e,e,i,i,i,i,i,i,l,n,n,o,o,o,o,o,o,o,o,s,s,s,u,u,u,u,u,y,z,z,z,A,A,A,A,A,A,A,A,C,C,C,E,E,E,E,E,E,E,I,I,I,I,I,I,L,N,N,O,O,O,O,O,O,O,O,S,S,U,U,U,U,U,Y,Z,Z,Z");
      return $this->remove_emoji(str_replace($search, $replace, $texto));
   }

   function remove_emoji($string){
      /*
      # Esta função retorna o conteúdo de uma string removendo oas caracteres especiais
      # usados para representação de emojis.
      #
      */
      return preg_replace('%(?:
      \xF0[\x90-\xBF][\x80-\xBF]{2}      # planes 1-3
    | [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
    | \xF4[\x80-\x8F][\x80-\xBF]{2}      # plane 16
   )%xs', '  ', $string);      
   }

    function crcChecksum($str) {
       
        function charCodeAt($str, $i) {
           return ord(substr($str, $i, 1));
        }
     
        $crc = 0xFFFF;
        $strlen = strlen($str);
        for($c = 0; $c < $strlen; $c++) {
           $crc ^= charCodeAt($str, $c) << 8;
           for($i = 0; $i < 8; $i++) {
                 if($crc & 0x8000) {
                    $crc = ($crc << 1) ^ 0x1021;
                 } else {
                    $crc = $crc << 1;
                 }
           }
        }
        $hex = $crc & 0xFFFF;
        $hex = dechex($hex);
        $hex = strtoupper($hex);
        $hex = str_pad($hex, 4, '0', STR_PAD_LEFT);
     
        return $hex;
     }
    

 
}