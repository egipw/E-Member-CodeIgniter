 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_perangkat');		
	}

//*********************START-TAMPIL-perangkat*******************//
	function index() {
		$data['isi'] = 'perangkat/index';
		$data['js'] = 'perangkat/index_js';

		$this->load->view('template/template', $data);
	}
//*********************END-TAMPIL-perangkat*******************//

//*********************START-TAMBAH-perangkat*******************//
	function tambah(){
		$data['isi'] = 'perangkat/tambah';
		$data['js'] = 'perangkat/index_js';
		$this->load->view('template/template', $data);
	}

	var $db;
	var $table = "perangkat";

	function aksi_tambah(){
	if ($this->db->get_where('perangkat', ['perangkat' => $this->input->post('perangkat')])->result() != null) {
			redirect(base_url('perangkat/tambah?error=1'));
		}
		 else {
		$perangkat = $this->input->post('perangkat');
		$keterangan = $this->input->post('keterangan');
		$alamat = $this->input->post('alamat');
		
		  $this->db->select('RIGHT(perangkat.id_perangkat,2) as kode', FALSE);
		  $this->db->order_by('id_perangkat','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('perangkat');    
		  if($query->num_rows() <> 0){           
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {           
		   $kode = 1;    
		  }

		$kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
		$id_perangkat = "sto".$kodemax; 
		
		$this->m_perangkat->tambah_perangkat($id_perangkat, $perangkat);

		}
		
		redirect(base_url('perangkat'));
	}
//*********************END-TAMBAH-perangkat*******************//

//*********************START-UBAH-perangkat*******************//
	function ubah($id_perangkat){
		$data['data']= $this->m_perangkat->ambil_data_perangkat($id_perangkat);
		$data['isi'] = 'perangkat/ubah';
		$data['js'] = 'perangkat/index_js';
		
		$this->load->view('template/template', $data);
	}

	function aksi_ubah(){
	if ($this->db->get_where('perangkat', ['perangkat' => $this->input->post('perangkat')])->result() != null) {
			redirect(base_url('perangkat/index/?error=2'));
		}
		 else {
		$id_perangkat = $this->input->post('id_perangkat');
		$perangkat = $this->input->post('perangkat');
		$keterangan = $this->input->post('keterangan');
		$alamat = $this->input->post('alamat');
		
		$this->m_perangkat->ubah_perangkat($perangkat, $id_perangkat);
		}
		redirect(base_url('perangkat'));	
	}
//*********************END-UBAH-perangkat*******************//

//*********************START-HAPUS-perangkat*******************//
	function aksi_hapus($id_perangkat){
		$this->m_perangkat->hapus_perangkat($id_perangkat);
		
		redirect(base_url('perangkat'));	
	}
//*********************END-TAMBAH-perangkat*******************//

}