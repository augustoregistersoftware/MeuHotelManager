<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
        #$this->load->model("quarto_model");
        
    }

	public function index()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
            #$data['quartos'] = $this->quarto_model->quartos();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/checkin');
			$this->load->view('templates/footer');
		}
	}

}