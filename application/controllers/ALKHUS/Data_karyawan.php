<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_karyawan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data_karyawan');
	}

//*********************START-TAMPIL-DATA_KARYAWAN*******************//
	function index(){
		$data['data_karyawan']= $this->m_data_karyawan->ambil_data_karyawan();
		$data['isi']= 'data_karyawan/index';
		$data['js'] = 'data_karyawan/index_js';

		$this->load->view("template/template", $data);
	
	}

	function tanggal_dari_sampai(){
		$data['data_karyawan']  = $this->m_data_karyawan->ambil_antara_tanggal($this->input->post('id'), $this->input->post('tanggal_dari'), $this->input->post('tanggal_sampai'), $this->input->post('id_kategori'));
		$data['isi']= 'data_karyawan/laporan_tgl';
		$data['js'] = 'data_karyawan/index_js';
		
		$this->load->view("template/template", $data);
	}
//*********************END-TAMPIL-DATA_KARYAWAN*******************//

//*********************START-TAMPIL-LIHAT-DETAIL-DATA_KARYAWAN*******************//
	function lihat(){
		$data['data_karyawan'] = $this->m_data_karyawan->lihat_laporan_karyawan($this->input->post('id'));
		$data['isi']= 'data_karyawan/lihat';
		$data['js'] = 'data_karyawan/index_js';

		$this->load->view('template/template', $data);
	}
//*********************END-TAMPIL-LIHAT-DETAIL-DATA_KARYAWAN*******************//

//*********************START-EXPORT-DATA_KARYAWAN*******************//
	function export_k_pdf(){
		$data = $this->m_data_karyawan->lihat_laporan_karyawan($this->input->post('id'));
		$this->load->view("data_karyawan/export_pdf", array("data"=>$data));

		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->set_paper('legal', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan_Kegiatan_Data_Harian_Petugas_Switching.pdf");
	}

	function export_k_excel(){	
		$data = array( 'title' => 'Laporan_Kegiatan_Data_Harian_Petugas_Switching', 'data' => $this->m_data_karyawan->lihat_laporan_karyawan_excel($this->input->post('id')));
	 	$this->load->view('data_karyawan/export_excel',$data);	
	}

	function export_tanggal_pdf(){
		$data = $this->m_data_karyawan->ambil_antara_tanggal($this->input->post('id'), $this->input->post('tanggal_dari'), $this->input->post('tanggal_sampai'), $this->input->post('id_kategori'));
		$this->load->view("data_karyawan/export_pdf", array("data"=>$data));

		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->set_paper('legal', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan_Kegiatan_Data_Harian_Petugas_Switching(Tanggal).pdf");
	}

	function export_tanggal_excel(){
	 	$data = array( 'title' => 'Laporan_Kegiatan_Data_Harian_Petugas_Switching(Tanggal)', 'data' => $this->m_data_karyawan->ambil_antara_tanggal($this->input->post('id'), $this->input->post('tanggal_dari'), $this->input->post('tanggal_sampai'), $this->input->post('id_kategori')));
	 	$this->load->view('data_karyawan/export_excel',$data);
	 }
//*********************END-EXPORT-DATA_KARYAWAN*******************//
}