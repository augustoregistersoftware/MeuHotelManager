<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Visita extends CI_Controller {

	//Função Construct para trazer o carregamento da modal
    public function __construct()
    {
		parent::__construct();	    
    }

	public function index()
	{
    $this->load->view('js/jquery-3.3.1.min.php'); 
    $this->load->view('js/jquery-migrate-3.0.1.min.php'); 
    $this->load->view('js/popper.min.php'); 
    $this->load->view('js/bootstrap.min.php'); 
    $this->load->view('js/owl.carousel.min.php'); 
    $this->load->view('js/jquery.stellar.min.php'); 
    $this->load->view('js/jquery.fancybox.min.php'); 
    $this->load->view('js/aos.php'); 
    $this->load->view('js/bootstrap-datepicker.php') ;
    $this->load->view('js/jquery.timepicker.min.php');
    $this->load->view('js/main.php');

		$this->load->view('pages/visit/index');
	}

}