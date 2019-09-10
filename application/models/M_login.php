<?php
class M_login extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function cek_user_password($email, $password){
		$sql = "SELECT f_cek_login(?,?) total";
		$query = $this->db->query($sql, array($email, $password));
		$row = $query->row();
		return $row->total;
	}

	function ambil_data_user($email, $password){
		$sql = "CALL sp_ambil_data_user(?,?)";
		$query = $this->db->query($sql, array($email, $password));
		$row = $query->row();
		$data_user = array('id_user' => $row->id_user,
							'nama' => $row->nama,
							'no_hp' => $row->no_hp, 
							'email' => $row->email,
							'status' => $row->status, 
							'level' => $row->level);
		return $data_user;
	}
}
?>