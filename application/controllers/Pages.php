<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	
	public function __construct()
	{
		# code...
		parent::__construct();
		// $this->load->helper('url');
	}

	public function view($page = 'home'){
		// echo APPPATH.'views/pages/'.$page.'.php';
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header');
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
	}

	public function index(){
		echo "test";
		$this->load->view('welcome_message');
	}

	public function login(){
		$this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
	}
}