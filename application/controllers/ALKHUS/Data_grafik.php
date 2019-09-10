<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_grafik extends CI_Controller {
	function __construct(){
		parent::__construct();	
	}

//*********************START-TAMPIL-DATA_GRAFIK*******************//
	function index(){
		$data['isi'] = "data_grafik/index";
		$data['js'] = "data_grafik/index_js";
			
		$this->load->view("template/template", $data);
	}
//*********************END-TAMPIL-DATA_GRAFIK*******************//
}
