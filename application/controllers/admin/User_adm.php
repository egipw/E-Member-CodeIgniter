<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_adm extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user_adm');		
	}

	function index() {
		$data['items']= $this->m_user_adm->ambil_data_user_adm();
		$data['isi'] = 'admin/user_adm/index';
		$data['js'] = 'admin/user_adm/index_js';
		$this->load->view('template/template', $data);
	}

	function tambah(){
		$data['isi'] = 'admin/user_adm/tambah';
		$data['js'] = 'admin/user_adm/tambah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_tambah(){
	if ($this->db->get_where('tbl_user', ['email' => $this->input->post('email')])->result() != null) {
			redirect(base_url('admin/user_adm/tambah?error=1'));
		}
	else {
		$email = $this->input->post('email');
		$password = hash('sha512', $this->input->post('password'));
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
		$this->m_user_adm->tambah_user_adm($id_user, $email, $password, $nama, $level);
		}
		redirect(base_url('admin/user_adm'));
	}

	function ubah($id_user){
		$data['data']= $this->m_user_adm->select_data_user_adm($id_user);
		$data['isi'] = 'admin/user_adm/ubah';
		$data['js'] = 'admin/user_adm/ubah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_ubah(){
		$id_user = $this->input->post('id_user');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$this->m_user_adm->ubah_user_adm($nama, $email, $level, $id_user);
		redirect(base_url('admin/user_adm'));	
	}

	function aksi_hapus($id_user){
		$this->db->delete('tbl_user', array('id_user' => $id_user));
		redirect(base_url('admin/user_adm'));	
	}

	function aksi_ubah_password() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = hash('sha512', $value);
		}
		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}
		$this->db->update('tbl_user', $data, $where);
		redirect(base_url('admin/user_adm'));
	}
}