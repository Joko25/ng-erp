<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Auth extends CI_Controller
{
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}
	
	public function index(){
		echo "LOGIN PAGES";
	}

	public function view(){
		$this->load->view('templates/header');
        // $this->load->view('pages/login');
        // $this->load->view('templates/footer');
	}

	public function aksi_login(){
		// echo "string";
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where =  array(
			'username'=> $username,
			'password' => md5($password)
		);

		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		// echo $username.$password.$cek;

		if ($cek > 0) {
			# code...
			$data_session = array(
				'nama' => $username,
				'status' => 'login'
			);

			$this->session->set_userdata($data_session);
			// redirect(base_url('ng-erp/dashboard'));
			echo json_encode('success');
		}else{
			// echo "Username atau Password salah";
			echo json_encode(array('errorMsg'=>'Username atau Password salah'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('ng-erp/login'));
	}
}