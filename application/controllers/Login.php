<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
		$this->load->model("login_model");
    }

	public function index()
	{
        $this->load->view('pages/login');
		$this->session->sess_destroy();
	}

	public function auth()
	{
		$senha_para_crip = 'bNzLsJB3/H$dasrg654fg';
		$email = $this->input->post('username');
		$senha = $this->input->post('password');

		$validate = $this->login_model->auth($email,$senha);
		$validade_count = count($validate);

		if ($validade_count > 0){
			redirect("login?aviso=login_certo");
		}else{
			$this->session->set_flashdata('warning','Acesso Negado!');
			redirect("login?aviso=login_errado");
		}
	}

	public function esqueci_senha()
	{
        $this->load->view('pages/recuperar_senha');
	}

}