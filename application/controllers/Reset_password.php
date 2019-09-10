<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_password extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_member');		
	}

	function index(){
		$data['data']['tbl_user'] = $this->db->get_where('tbl_user', ['id_user' => $this->session->id_user])->row();
		$data['isi'] = 'member/reset_password';
		$data['js'] = 'member/reset_password_js';
		$this->load->view('template/template', $data);
	}

	function aksi_reset_password() {
		$password = hash('sha512', "polinela123");
		$id_user = $this->input->post('id_user');
		$this->m_user_member->reset_password($id_user, $password);
		redirect(base_url('admin/user_member'));
	}
}