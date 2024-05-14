<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
        $this->load->model("dashboard_model");
        $this->load->model("message_model");
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
            $data['diferenca_checkin'] = $this->dashboard_model->select_diferenca_checkin();

			$id = $this->session->userdata('id');

			$data["quantidade_messagem"] =  $this->message_model->quantidade_mensagem($id);
			$data["listagem"] =  $this->message_model->conteudos_mensagem_listagem($id);

			$this->load->view('templates/header');
			$this->load->view('templates/navbar',$data);
			$this->load->view('templates/sidebarsettings');
			$this->load->view('pages/dashboard',$data);
			$this->load->view('templates/footer');
		}
	}

}