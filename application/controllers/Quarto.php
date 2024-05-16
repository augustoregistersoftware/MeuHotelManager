<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quarto extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
        $this->load->model("quarto_model");
    }

	public function lista_foto()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
            $data['fotos'] = $this->quarto_model->fotos();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/lista_foto_quarto',$data);
			$this->load->view('templates/footer');
		}
	}

	public function cadastro()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
            $data['quartos'] = $this->quarto_model->quartos();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/quarto',$data);
			$this->load->view('templates/footer');
		}
	}

	public function foto_quarto($id)
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
			$data['fotos'] = $this->quarto_model->select_fotos_id($id);

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/fotos_quarto',$data);
			$this->load->view('templates/footer');
		}
	}

	public function cadastro_foto_quarto()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
			$data['quartos'] = $this->quarto_model->quartos();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/cadastro_foto_quarto',$data);
			$this->load->view('templates/footer');
		}
	}

	public function inserte_foto()
	{
		$data_foto["titulo"] = $_POST['titulo'];
		$data_foto['caminho'] = $_FILES['file']['name'];
		$data_foto["id_quarto"] =  $_POST['quarto'];
		$data_foto["descricao"] =  $_POST['descricao'];
		
		if(isset($_FILES["file"]) && !empty($_FILES["file"])){
			move_uploaded_file($_FILES['file']['tmp_name'], 'imagens/' .$_FILES['file']['name']);
			$this->quarto_model->inserte_documento($data_foto);
			redirect("quarto/lista_foto");
		}else{
			echo"<p style='color: #f00;'>Erro/p>";
		}
	}

	public function obter_dados() {
		$idDoQuarto = $this->input->get('idDoQuarto');
        $dados = $this->quarto_model->obter_dados($idDoQuarto);
        echo json_encode($dados);
    }

}