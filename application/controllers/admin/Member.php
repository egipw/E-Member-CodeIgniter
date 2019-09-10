<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_member');
	}

	function index() {
		$data['items']= $this->m_member->ambil_data_member();
		$data['isi'] = 'admin/member/index';
		$data['js'] = 'admin/member/index_js';
		$this->load->view('template/template', $data);
	}

	function tambah(){
		$data['isi'] = 'admin/member/tambah';
		$data['js'] = 'admin/member/tambah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_tambah(){

		if ($this->db->get_where('tbl_user', ['email' => $this->input->post('email')])->result() != null) {
			redirect(base_url('admin/member/tambah?error=1'));
		}
		else {
		$datauser = array('email'=>$this->input->post('email'),
			        'password'=>hash('sha512', "polinela123"),
			        'nama'=>$this->input->post('nama'),
			        'kampus'=>$this->input->post('kampus'),
					'prodi'=>$this->input->post('prodi'),
					'tahun_lulus'=>$this->input->post('tahun_lulus'),
					'status'=>"1",
			    	'level'=>"2");
		$this->db->insert('tbl_user',$datauser);

		}
		redirect(base_url('admin/member'));
	}

	function upload($id_user) {
		$data['data']= $this->m_member->select_data_member_baru($id_user);
		$data['isi'] = 'admin/member/upload';
		$data['js'] = 'admin/member/upload_js';
		$this->load->view('template/template', $data);
	}

	function aksi_upload()
	{
		$fav = $_FILES['foto'];
		if ($fav['size'] != 0) {
			move_uploaded_file($fav['tmp_name'], 'uploads/userimage/temp/' . $this->input->post('id_user'));
			$image = new \Gumlet\ImageResize('uploads/userimage/temp/' . $this->input->post('id_user'));
			$image->crop(75, 113);
			$image->save('uploads/userimage/' . $this->input->post('id_user'));
			unlink('uploads/userimage/temp/' . $this->input->post('id_user'));
		}
		redirect(base_url('admin/member'));
	}

	function cetak($id_user) {	
		$data['data']= $this->m_member->select_data_member_baru($id_user);
		$data['isi'] = 'admin/member/cetak';
		$data['js'] = 'admin/member/cetak_js';
		$this->load->view('template/template', $data);		
	}

	function export_kartu($id_user) {	
		$data['data'] = $this->m_member->ambil_data_member_cetak($id_user);
		$this->load->view("admin/member/kartu_pdf", $data);
		
		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->set_paper('A6', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Kartu Member.pdf");		
	}
}