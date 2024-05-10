<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
        $this->load->model("dashboard_model");
    }

	public function index()
	{
        if($this->session->userdata('log')!="logged"){
			redirect("login");
		}else{
            $data['total_hospedado'] = $this->dashboard_model->hospedado();
            $data['total_reservado'] = $this->dashboard_model->reservados();
            $data['total_livre'] = $this->dashboard_model->livres();
            $data['total_faturado'] = $this->dashboard_model->total_faturado();
            $data['clientes'] = $this->dashboard_model->select_clientes();

			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/dashboard',$data);
			$this->load->view('templates/footer');
		}
	}

}