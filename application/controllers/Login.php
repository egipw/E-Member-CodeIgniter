<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');		
	}

	function index() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$total = $this->m_login->cek_user_password($email, $password);
		
		if ($total == 1) {			
			$data_user = $this->m_login->ambil_data_user($email, $password);
			
			$array_data_user = array(
			'id_user'  => $data_user['id_user'],
			'nama'  => $data_user['nama'],
			'status'  => $data_user['status'],
			'email'  => $data_user['email'],
			'level'  => $data_user['level'],
			'login'  => true
			);

			$this->session->set_userdata($array_data_user);
			
			redirect(base_url());
		} else {
			redirect(base_url('?valid=0'));
		}
		
	}

}
