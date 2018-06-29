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

             // echo $log;

	    $log = $this->session->userdata('status');
	    $username = $this->session->userdata('name');
        if ($page == 'home') {
        	# code...
        	if ($log == 'login') {
        		redirect(base_url('ng-erp/dashboard'));
        		# code...
        	}
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['log'] = $log;
        $data['username'] = $username;

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
	}

	public function index(){
		echo "test";
		$this->load->view('welcome_message');
	}

	public function dashboard(){
		$this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
	}

	public function getuser(){
		$this->load->library('datatables');
        $this->datatables->select('*');
        $this->datatables->from('admin');
        return print_r($this->datatables->generate());
	}
}