<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_auth');		
	}

	function register() {
		$this->load->view('auth/register');
	}

	function aksi_tambah() {
		
		if ($this->db->get_where('tbl_user', ['email' => $this->input->post('email')])->result() != null) {
			redirect(base_url('admin/member/tambah?error=1'));
		}
		else {
		$datauser = array('email'=>$this->input->post('email'),
			        'password'=>hash('sha512', $this->input->post('password')),
			        'nama'=>$this->input->post('nama'),
			        'kampus'=>$this->input->post('kampus'),
					'prodi'=>$this->input->post('prodi'),
					'tahun_lulus'=>$this->input->post('tahun_lulus'),
					'status'=>"2",
			    	'level'=>"2");
		$this->db->insert('tbl_user',$datauser);

		}
		redirect(base_url(''));
	
	}

	function lupa_password() {
		$this->load->view('auth/lupa_password');
	}

	function reset_password() {
		$password = hash('sha512', "polinela123");
		$email = $this->input->post('email');
		$this->m_auth->reset_password($email, $password);
		redirect(base_url(''));
	}

	
}