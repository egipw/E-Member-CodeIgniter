<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_baru extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_member');		
	}

	function index() {
		$data['items']= $this->m_member->ambil_data_member_baru();
		$data['isi'] = 'admin/member_baru/index';
		$data['js'] = 'admin/member_baru/index_js';
		$this->load->view('template/template', $data);
	}

	function tambah(){
		$data['isi'] = 'admin/member_baru/tambah';
		$data['js'] = 'admin/member_baru/tambah_js';
		$this->load->view('template/template', $data);
	}

	function verifikasi($id_user){
		$data['data']= $this->m_member->select_data_member_baru($id_user);
		$data['isi'] = 'admin/member_baru/verifikasi';
		$data['js'] = 'admin/member_baru/verifikasi_js';
		$this->load->view('template/template', $data);
	}

	function aksi_verifikasi(){
		$id_user = $this->input->post('id_user');
		$status = '1';
		$this->m_member->verifikasi($id_user, $status);
		redirect(base_url('admin/member_baru'));	
	}
}