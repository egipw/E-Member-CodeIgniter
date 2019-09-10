<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentral extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_sentral');		
	}

//*********************START-TAMPIL-sentral*******************//
	function index() {
		$data['isi'] = 'sentral/index';
		$data['js'] = 'sentral/index_js';

		$this->load->view('template/template', $data);
	}
//*********************END-TAMPIL-sentral*******************//

//*********************START-TAMBAH-sentral*******************//
	function tambah(){
		$data['isi'] = 'sentral/tambah';
		$data['js'] = 'sentral/index_js';
		$this->load->view('template/template', $data);
	}

	var $db;
	var $table = "sentral";

	function aksi_tambah(){
	if ($this->db->get_where('sentral', ['lokasi' => $this->input->post('lokasi')])->result() != null) {
			redirect(base_url('sentral/tambah?error=1'));
		}
		 else {
		$lokasi = $this->input->post('lokasi');
		$keterangan = $this->input->post('keterangan');
		$alamat = $this->input->post('alamat');
		
		  $this->db->select('RIGHT(sentral.id_sentral,2) as kode', FALSE);
		  $this->db->order_by('id_sentral','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('sentral');    
		  if($query->num_rows() <> 0){           
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {           
		   $kode = 1;    
		  }

		$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
		$id_sentral = "sto".$kodemax; 
		
		$this->m_sentral->tambah_sentral($id_sentral, $lokasi, $keterangan, $alamat);

		}
		
		redirect(base_url('sentral'));
	}
//*********************END-TAMBAH-sentral*******************//

//*********************START-UBAH-sentral*******************//
	function ubah($id_sentral){
		$data['data']= $this->m_sentral->ambil_data_sentral($id_sentral);
		$data['isi'] = 'sentral/ubah';
		$data['js'] = 'sentral/index_js';
		
		$this->load->view('template/template', $data);
	}

	function aksi_ubah(){
	if ($this->db->get_where('sentral', ['lokasi' => $this->input->post('lokasi')])->result() != null) {
			redirect(base_url('sentral/index/?error=2'));
		}
		 else {
		$id_sentral = $this->input->post('id_sentral');
		$lokasi = $this->input->post('lokasi');
		$keterangan = $this->input->post('keterangan');
		$alamat = $this->input->post('alamat');
		
		$this->m_sentral->ubah_sentral($lokasi, $keterangan, $alamat, $id_sentral);
		}
		redirect(base_url('sentral'));	
	}
//*********************END-UBAH-sentral*******************//

//*********************START-HAPUS-sentral*******************//
	function aksi_hapus($id_sentral){
		$this->m_sentral->hapus_sentral($id_sentral);
		
		redirect(base_url('sentral'));	
	}
//*********************END-TAMBAH-sentral*******************//

}