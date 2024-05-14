<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout pix Mercado Pago</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body, html {
            height: 100%; /* necessário para o container principal ter altura completa */
            margin: 0; /* remove a margem padrão */
            display: flex; /* habilita flexbox para o corpo */
            justify-content: center; /* centraliza horizontalmente */
            align-items: center; /* centraliza verticalmente */
            padding: 20px; /* adiciona um pouco de padding ao redor do corpo para evitar colar na borda da tela */
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<span id="status"></span>
<div class="row container">
    <div class="col-lg-4"></div>
    <div class="col-lg-4" style="border: 1px solid #ccc; border-radius: 10px; padding: 15px;">
        <center>
        <p>Validade do pagamento:</p>
        <h1 style="color: black; font-size: 35px;" id="countdown"></h1>
        
        <span style="color: black; font-size: 17px;">Total a pagar: </span><b style="color: green; font-size: 19px;">R$ <?php echo number_format($valor,2,",",".");?></b>
        <br>
        <div><?= $qrcode_svg ?></div>

        <br>
        <input type="text" class="form-control" id="linhapix" value="<?php echo $chavefinal;?>" readonly>
        <button class="btn btn-success" style="width:100%; font-size: 16px;" onclick="copiarTexto()">Copiar</button>
        <b style="color: green; font-size: 14px;">Ambiente seguro 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
            </svg>
        </b>
        </center>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
$( document ).ready(function() {
    var tempo = 2000; //Dois segundos

    (function selectNumUsuarios () {
        $.ajax({
          url: "https://<?php echo $host;?>/status.php?id=<?php echo $_GET['id'];?>",
          success: function (n) {
              //essa é a function success, será executada se a requisição obtiver exito
              $("#status").html(n);
          },
          complete: function () {
              setTimeout(selectNumUsuarios, tempo);
          }
       });
    })();
});
</script>

<script>
const startTime = new Date();
startTime.setHours(<?php echo $hora;?>, <?php echo $minuto;?>, 0);

// Defina a hora de término do cronômetro (10 minutos após a hora de partida)
const endTime = new Date(startTime.getTime() + 10 * 60 * 1000);

// Obtenha a referência para o elemento HTML que exibe o tempo restante
const countdownEl = document.getElementById('countdown');

// Defina a função que atualiza o cronômetro
function updateCountdown() {
    // Calcule o tempo restante em segundos
    const currentTime = Date.now();
    const remainingTime = Math.max(0, Math.floor((endTime - currentTime) / 1000));
    
    // Formate o tempo restante em minutos e segundos
    const minutes = Math.floor(remainingTime / 60);
    const seconds = remainingTime % 60;
    const timeFormatted = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    
    // Atualize o elemento HTML com o tempo restante
    countdownEl.textContent = timeFormatted;
    
    // Se o tempo restante acabou, pare o cronômetro
    if (remainingTime === 0) {
        window.location.href = "https://<?php echo $host;?>/expirou.php";
    }
}

// Inicie o cronômetro e atualize-o a cada segundo
updateCountdown();
const intervalId = setInterval(updateCountdown, 1000);
</script>
<script>
    function copiarTexto() {
      // Seleciona o campo de entrada de texto
      var campoDeTexto = document.getElementById("linhapix");
    
      // Seleciona o texto no campo de entrada de texto
      campoDeTexto.select();
      campoDeTexto.setSelectionRange(0, 99999); // Para dispositivos móveis
    
      // Copia o texto para a área de transferência
      document.execCommand("copy");
    
      // Exibe a janela de confirmação com Swal.fire
      Swal.fire({
        icon: 'success',
        title: 'Linha do pix',
        text: 'Copiada com sucesso!',
      });
    }
</script>
</body>
</html>