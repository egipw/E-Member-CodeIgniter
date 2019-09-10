   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();	
	}

	function index() {
		if ($this->session->login != true) {
			$this->load->view("template/login");
		} else {
			$data['isi'] = "welcome/index";
			$data['js'] = "welcome/index_js";
			$this->load->view("template/template", $data);
		}
	}

	function login() {
		$data_user = $this->db->get_where('tbl_user', 
			['email' => $this->input->post('email'), 
			 'password' => hash("sha512", $this->input->post('password'))])->row();

		if ($data_user != null) {			
			$array_data_user = array(
				'id_user'  => $data_user->id_user,
				'nama'  => $data_user->nama,
				'email'  => $data_user->email,
				'status'  => $data_user->status,
				'level'  => $data_user->level,
				'login'  => true
			);

			$this->session->set_userdata($array_data_user);

			echo json_encode(['login' => true]);
		} else {
			$data['header'] = "ERROR !!!";
			$data['pesan'] = "Username atau Password Salah !!!";
			$data['status'] = "error";

			$data['login'] = false;

			echo json_encode($data);
		}
	}

	function index2() {
		$data['kaprodi']= $this->m_kaprodi->ambil_kaprodi();
		$data['isi']= 'Kaprodi/index';
		$data['js'] = 'Kaprodi/index_js';
		// $data['isi'] = "welcome/index";
		// $data['js'] = "welcome/index_js";
		$this->load->view("template/template", $data);
	}

}
