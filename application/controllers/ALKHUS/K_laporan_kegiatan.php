<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class K_laporan_kegiatan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_k_laporan_kegiatan');		
	}

//*********************START-TAMPIL-K_LAPORAN_KEGIATAN*******************//
	function index() {
		$id_user = $this->session->id;
		//$nama_petugas = $this->session->nama;
		$data['laporan_kegiatan']= $this->m_k_laporan_kegiatan->ambil_laporan_kegiatan($id_user);
		$data['get_kategori']= $this->m_k_laporan_kegiatan->get_kategori();
		$data['get_sentral']= $this->m_k_laporan_kegiatan->get_sentral();
		$data['get_perangkat']= $this->m_k_laporan_kegiatan->get_perangkat();
		$data['isi']= 'k_laporan_kegiatan/index';
		$data['js'] = 'k_laporan_kegiatan/index_js';

		$this->load->view("template/template", $data);
	}
//*********************END-TAMPIL-K_LAPORAN_KEGIATAN*********************//


//*********************START-TAMBAH-K_LAPORAN_KEGIATAN*******************//
	var $db;
	var $table = "laporan_kegiatan";
	function aksi_tambah(){
	if ($this->input->post('id_kategori')=='ktg01' AND $this->db->get_where('dn', ['dn' => $this->input->post('dn'),'id_sentral' => $this->input->post('sentral'), 'id_perangkat' => $this->input->post('perangkat'),'eqn_tid' => $this->input->post('eqn_tid')])->result()!=null) {

		$id_user = $this->input->post('id_user');
		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');
		$uraian_kegiatan = $this->input->post('uraian_kegiatan');
		$dn = $this->input->post('dn');
		$sentral = $this->input->post('sentral');
		$perangkat = $this->input->post('perangkat');
		$eqn_tid = $this->input->post('eqn_tid');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$keterangan = $this->input->post('keterangan');

		  $this->db->select('RIGHT(laporan_kegiatan.id_laporan_kegiatan,2) as kode', FALSE);
		  $this->db->order_by('id_laporan_kegiatan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('laporan_kegiatan');    
		  if($query->num_rows() <> 0){           
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }		
		  else {           
		   $kode = 1;    
		  }

		$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
		$id_laporan_kegiatan = "lpk".$kodemax; 

		$this->m_k_laporan_kegiatan->tambah_k_laporan_kegiatan($id_laporan_kegiatan, $id_user, $id_kategori, $tanggal, $uraian_kegiatan, $dn, $sentral, $perangkat, $eqn_tid, $jam_mulai, $jam_selesai, $keterangan);

		redirect(base_url('k_laporan_kegiatan'));

	} if ($this->input->post('id_kategori')=='ktg02' AND $this->db->get_where('dn', ['dn' => $this->input->post('dn'),'id_sentral' => $this->input->post('sentral'), 'id_perangkat' => $this->input->post('perangkat'), 'eqn_tid' => $this->input->post('eqn_tid')])->result()!=null) {

		$id_user = $this->input->post('id_user');
		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');
		$uraian_kegiatan = $this->input->post('uraian_kegiatan');
		$dn = $this->input->post('dn');
		$sentral = $this->input->post('sentral');
		$perangkat = $this->input->post('perangkat');
		$eqn_tid = $this->input->post('eqn_tid');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$keterangan = $this->input->post('keterangan');

		  $this->db->select('RIGHT(laporan_kegiatan.id_laporan_kegiatan,2) as kode', FALSE);
		  $this->db->order_by('id_laporan_kegiatan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('laporan_kegiatan');    
		  if($query->num_rows() <> 0){           
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }		
		  else {           
		   $kode = 1;    
		  }

		$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
		$id_laporan_kegiatan = "lpk".$kodemax; 

		$this->m_k_laporan_kegiatan->tambah_k_laporan_kegiatan($id_laporan_kegiatan, $id_user, $id_kategori, $tanggal, $uraian_kegiatan, $dn, $sentral, $perangkat, $eqn_tid, $jam_mulai, $jam_selesai, $keterangan);

		redirect(base_url('k_laporan_kegiatan'));

		} if ($this->input->post('id_kategori')=='ktg03') {

		$id_user = $this->input->post('id_user');
		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');
		$uraian_kegiatan = $this->input->post('uraian_kegiatan');
		$dn = $this->input->post('dn');
		$sentral = $this->input->post('sentral');
		$perangkat = $this->input->post('perangkat');
		$eqn_tid = $this->input->post('eqn_tid');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$keterangan = $this->input->post('keterangan');

		  $this->db->select('RIGHT(laporan_kegiatan.id_laporan_kegiatan,2) as kode', FALSE);
		  $this->db->order_by('id_laporan_kegiatan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('laporan_kegiatan');    
		  if($query->num_rows() <> 0){           
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }		
		  else {           
		   $kode = 1;    
		  }

		$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
		$id_laporan_kegiatan = "lpk".$kodemax; 

		$this->m_k_laporan_kegiatan->tambah_k_laporan_kegiatan($id_laporan_kegiatan, $id_user, $id_kategori, $tanggal, $uraian_kegiatan, $dn, $sentral, $perangkat, $eqn_tid, $jam_mulai, $jam_selesai, $keterangan);

		redirect(base_url('k_laporan_kegiatan'));
		}
		 else {
			redirect(base_url('k_laporan_kegiatan?error=1'));
		}
}
//*********************END-TAMBAH-K_LAPORAN_KEGIATAN*********************//


//*********************START-UBAH-K_LAPORAN_KEGIATAN*********************//
	function ubah($id_laporan_kegiatan){
		$data['data'] = $this->m_k_laporan_kegiatan->ambil_detail_laporan_kegiatan($id_laporan_kegiatan);
		$data['get_sentral']= $this->m_k_laporan_kegiatan->get_sentral();
		$data['get_kategori']= $this->m_k_laporan_kegiatan->get_kategori();
		$data['get_perangkat']= $this->m_k_laporan_kegiatan->get_perangkat();
		$data['isi']= 'k_laporan_kegiatan/ubah';
		$data['js'] = 'k_laporan_kegiatan/ubah_js';
		$this->load->view('template/template', $data);
	}

	function aksi_ubah(){
	if ($this->input->post('id_kategori')=='ktg01'AND $this->db->get_where('dn', ['dn' => $this->input->post('dn'),'id_sentral' => $this->input->post('sentral'), 'id_perangkat' => $this->input->post('perangkat'), 'eqn_tid' => $this->input->post('eqn_tid')])->result()!=null){

		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');
		$uraian_kegiatan = $this->input->post('uraian_kegiatan');
		$dn = $this->input->post('dn');
		$sentral = $this->input->post('sentral');
		$perangkat = $this->input->post('perangkat');
		$eqn_tid = $this->input->post('eqn_tid');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$keterangan = $this->input->post('keterangan');

		$id_laporan_kegiatan = $this->input->post('id_laporan_kegiatan');

		$this->m_k_laporan_kegiatan->ubah_k_laporan_kegiatan($id_kategori, $tanggal, $uraian_kegiatan, $dn, $sentral, $perangkat, $eqn_tid, $jam_mulai, $jam_selesai, $keterangan, $id_laporan_kegiatan);
		redirect(base_url('k_laporan_kegiatan'));
		} 

	if ($this->input->post('id_kategori')=='ktg02'AND $this->db->get_where('dn', ['dn' => $this->input->post('dn'),'id_sentral' => $this->input->post('sentral'), 'id_perangkat' => $this->input->post('perangkat'), 'eqn_tid' => $this->input->post('eqn_tid')])->result()!=null){

		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');
		$uraian_kegiatan = $this->input->post('uraian_kegiatan');
		$dn = $this->input->post('dn');
		$sentral = $this->input->post('sentral');
		$perangkat = $this->input->post('perangkat');
		$eqn_tid = $this->input->post('eqn_tid');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$keterangan = $this->input->post('keterangan');

		$id_laporan_kegiatan = $this->input->post('id_laporan_kegiatan');

		$this->m_k_laporan_kegiatan->ubah_k_laporan_kegiatan($id_kategori, $tanggal, $uraian_kegiatan, $dn, $sentral, $perangkat, $eqn_tid, $jam_mulai, $jam_selesai, $keterangan, $id_laporan_kegiatan);
		redirect(base_url('k_laporan_kegiatan'));
		}

		if ($this->input->post('id_kategori')=='ktg03'){
		$id_kategori = $this->input->post('id_kategori');
		$tanggal = $this->input->post('tanggal');
		$uraian_kegiatan = $this->input->post('uraian_kegiatan');
		$dn = $this->input->post('dn');
		$sentral = $this->input->post('sentral');
		$perangkat = $this->input->post('perangkat');
		$eqn_tid = $this->input->post('eqn_tid');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$keterangan = $this->input->post('keterangan');

		$id_laporan_kegiatan = $this->input->post('id_laporan_kegiatan');

		$this->m_k_laporan_kegiatan->ubah_k_laporan_kegiatan($id_kategori, $tanggal, $uraian_kegiatan, $dn, $sentral, $perangkat, $eqn_tid, $jam_mulai, $jam_selesai, $keterangan, $id_laporan_kegiatan);
		redirect(base_url('k_laporan_kegiatan'));			
		}
		 else {
		 	redirect(base_url('k_laporan_kegiatan/?error=2'));
		}
		redirect(base_url('k_laporan_kegiatan'));	
	}
//*********************END-UBAH-K_LAPORAN_KEGIATAN**********************//


//*********************START-HAPUS-K_LAPORAN_KEGIATAN*******************//
	function aksi_hapus($id_laporan_kegiatan) {
		$this->m_k_laporan_kegiatan->hapus_k_laporan_kegiatan($id_laporan_kegiatan);
		
		redirect(base_url('k_laporan_kegiatan'));
	}
//*********************END-HAPUS-K_LAPORAN_KEGIATAN*********************//

}