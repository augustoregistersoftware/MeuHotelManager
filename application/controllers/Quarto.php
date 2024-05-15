<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quarto extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
        $this->load->model("quarto_model");
    }

	public function cadastro()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
            $data['quartos'] = $this->quarto_model->quartos();
            $data['situacao'] = $this->quarto_model->situacao();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/quarto',$data);
			$this->load->view('templates/footer');
		}
	}

}