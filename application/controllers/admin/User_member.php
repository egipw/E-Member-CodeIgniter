<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user_member');		
	}

	function index() {
		$data['items']= $this->m_user_member->ambil_data_user_member();
		$data['isi'] = 'admin/user_member/index';
		$data['js'] = 'admin/user_member/index_js';
		$this->load->view('template/template', $data);
	}

	function reset_password($id_user){
		$data['data']= $this->m_user_member->select_data_user_member($id_user);
		$data['isi'] = 'admin/user_member/reset_password';
		$data['js'] = 'admin/user_member/reset_password_js';
		$this->load->view('template/template', $data);
	}

	function aksi_reset_password() {
		$password = hash('sha512', "polinela123");
		$id_user = $this->input->post('id_user');
		$this->m_user_member->reset_password($id_user, $password);
		redirect(base_url('admin/user_member'));
	}
}