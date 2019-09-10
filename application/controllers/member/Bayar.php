<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_bayar');		
	}

	function upload($id_user){
		$data['data']= $this->m_bayar->select_data_member($id_user);
		$data['isi'] = 'member/bayar';
		$data['js'] = 'member/bayar_js';
		$this->load->view('template/template', $data);
	}

	function aksi_upload(){
		$fav = $_FILES['foto'];
		if ($fav['size'] != 0) {
			move_uploaded_file($fav['tmp_name'], 'uploads/buktibayar/temp/' . $this->input->post('id_user'));
			$image = new \Gumlet\ImageResize('uploads/buktibayar/temp/' . $this->input->post('id_user'));
			$image->save('uploads/buktibayar/' . $this->input->post('id_user'));
			unlink('uploads/buktibayar/' . $this->input->post('id_user'));
		}
		redirect(base_url('profil/member'));	
	}

	

}