 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_kegiatan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_laporan_kegiatan');	
	}

//*********************START-TAMPIL-laporan_kegiatan*******************//
	function index(){
		$data['laporan_kegiatan']= $this->m_laporan_kegiatan->ambil_laporan_kegiatan();
		$data['isi']= 'laporan_kegiatan/index';
		$data['js'] = 'laporan_kegiatan/index_js';

		$this->load->view("template/template", $data);
	}

	function tanggal_dari_sampai(){
		$data['laporan_kegiatan']  = $this->m_laporan_kegiatan->ambil_antara_tanggal($this->input->post('tanggal_dari'), $this->input->post('tanggal_sampai'), $this->input->post('id_kategori'));
		$data['isi']= 'laporan_kegiatan/laporan';
		$data['js'] = 'laporan_kegiatan/index_js';
		
		$this->load->view("template/template", $data);
	}
//*********************END-TAMPIL-laporan_kegiatan*********************//

//*********************START-EXPORT-laporan_kegiatan*******************//
	function export_full_pdf() {	
		$data = $this->m_laporan_kegiatan->ambil_laporan_kegiatan();
		$this->load->view("laporan_kegiatan/export_pdf", array("data"=>$data));
		
		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->set_paper('legal', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan_Kegiatan_laporan_kegiatan_Switching.pdf");		
	}

	function export_full_excel(){	
		$data = array( 'title' => 'Laporan_Kegiatan_laporan_kegiatan_Switching', 'data' => $this->m_laporan_kegiatan->ambil_laporan_kegiatan());
		 $this->load->view('laporan_kegiatan/laporan_excel',$data);	
	}

	function export_tanggal_pdf(){
		$data = $this->m_laporan_kegiatan->ambil_antara_tanggal($this->input->post('tanggal_dari'), $this->input->post('tanggal_sampai'), $this->input->post('id_kategori'));
		$this->load->view("laporan_kegiatan/export_pdf", array("data"=>$data));

		$html = $this->output->get_output();
		$this->load->library('dompdf_gen');
		$this->dompdf->set_paper('legal', 'landscape');
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan_Kegiatan_laporan_kegiatan_Switching(Tanggal).pdf");
	}

	function export_tanggal_excel(){
	 	$data = array( 'title' => 'Laporan_Kegiatan_laporan_kegiatan_Switching(Tanggal)', 'data' => $this->m_laporan_kegiatan->ambil_antara_tanggal($this->input->post('tanggal_dari'), $this->input->post('tanggal_sampai'), $this->input->post('id_kategori')));
	 	$this->load->view('laporan_kegiatan/laporan_excel',$data);
	 }
//*********************END-EXPORT-laporan_kegiatan*********************//	
}