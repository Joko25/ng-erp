<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login extends CI_Controller
{
	
	public function index(){
		echo "LOGIN PAGES";
	}

	public function view(){
		$this->load->view('templates/header');
        // $this->load->view('pages/login');
        // $this->load->view('templates/footer');
	}
}