<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_member');	
	}

	function index() {
		$data['data']['tbl_user'] = $this->db->get_where('tbl_user', ['id_user' => $this->session->id_user])->row();
		$data['isi'] = 'member/index';
		$data['js'] = 'member/index_js';
		$this->load->view('template/template', $data);
	}

	function aksi_ubah_admin() {
		$fav = $_FILES['foto'];
		if ($fav['size'] != 0) {
			move_uploaded_file($fav['tmp_name'], 'uploads/userimage/temp/' . $this->session->id_user);
			$image = new \Gumlet\ImageResize('uploads/userimage/temp/' . $this->session->id_user);
			$image->crop(64, 64);
			$image->save('uploads/userimage/' . $this->session->id_user);
			unlink('uploads/userimage/temp/' . $this->session->id_user);
		}

		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}
		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('tbl_user', $data, $where);
		$this->session->set_userdata('nama', $data['nama']);
		redirect(base_url());
	}

	function aksi_ubah_password_admin() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = hash('sha512', $value);
		}
		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('tbl_user', $data, $where);
		redirect(base_url());
	}

	function export_kartu($id_user) {	
		$data['data'] = $this->m_member->ambil_data_member_cetak($id_user);
		$this->load->view("member/kartu_pdf", $data);
		
		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->set_paper('A6', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Kartu Member.pdf");		
	}

}