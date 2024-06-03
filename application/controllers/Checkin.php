<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkin extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
		$this->load->model("checkin_model");
        
    }

	public function index()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{

			$data_atual = date("Y-m-d"); 
			$timestamp = strtotime($data_atual);
			$data_formatada = date("d/m/Y", $timestamp);

			$data['data_formatada'] = $data_formatada;
			$data['checkin'] = $this->checkin_model->select_checkin();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/checkin',$data);
			$this->load->view('templates/footer_old');
		}
	}

}