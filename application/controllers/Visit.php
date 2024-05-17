<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
		$this->load->model("quarto_model");
    }

	public function index()
	{
		$data['quartos'] = $this->quarto_model->quartos();
        $this->load->view('pages/index',$data);
	}

}