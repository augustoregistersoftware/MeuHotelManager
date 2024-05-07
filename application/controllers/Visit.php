<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit extends CI_Controller {
	

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();
    }

	public function index()
	{
        $this->load->view('pages/index');
	}

}