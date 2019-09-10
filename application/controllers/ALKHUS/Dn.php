 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dn extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_dn');		
	}

//*********************START-TAMPIL-dn*******************//
	function index() {
		$data['isi'] = 'dn/index';
		$data['js'] = 'dn/index_js';

		$this->load->view('template/template', $data);
	}
//*********************END-TAMPIL-dn*******************//

//*********************START-TAMBAH-dn*******************//
	function tambah(){
		$data['get_sentral']= $this->m_dn->get_sentral();
		$data['get_perangkat']= $this->m_dn->get_perangkat();
		$data['isi'] = 'dn/tambah';
		$data['js'] = 'dn/index_js';
		$this->load->view('template/template', $data);
	}

	function aksi_tambah(){
	if ($this->db->get_where('dn', ['dn' => $this->input->post('dn')])->result() != null) {
			redirect(base_url('dn/tambah?error=1'));
		}
		 else {

		$dn = $this->input->post('dn');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$alamat = $this->input->post('alamat');
		$eqn_tid = $this->input->post('eqn_tid');
		$id_sentral = $this->input->post('id_sentral');
		$id_perangkat = $this->input->post('id_perangkat');
				
		$this->m_dn->tambah_dn($dn, $nama_pelanggan, $alamat, $eqn_tid, $id_sentral, $id_perangkat);

		}
		
		redirect(base_url('dn'));
	}
//*********************END-TAMBAH-dn*******************//

//*********************START-UBAH-dn*******************//
	function ubah($dn){
		$data['get_sentral']= $this->m_dn->get_sentral();
		$data['get_perangkat']= $this->m_dn->get_perangkat();
		$data['data']= $this->m_dn->ambil_data_dn($dn);
		$data['isi'] = 'dn/ubah';
		$data['js'] = 'dn/index_js';
		
		$this->load->view('template/template', $data);
	}

	function aksi_ubah(){
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$alamat = $this->input->post('alamat');
		$eqn_tid = $this->input->post('eqn_tid');
		$id_sentral = $this->input->post('id_sentral');
		$id_perangkat = $this->input->post('id_perangkat');
		$dn = $this->input->post('dn');

		
		$this->m_dn->ubah_dn($nama_pelanggan, $alamat, $eqn_tid, $id_sentral, $id_perangkat, $dn);
		
		redirect(base_url('dn'));	
	}
//*********************END-UBAH-dn*******************//

//*********************START-HAPUS-dn*******************//
	function aksi_hapus($dn){
		$this->m_dn->hapus_dn($dn);
		
		redirect(base_url('dn'));	
	}
//*********************END-TAMBAH-dn*******************//

}