<?php
class M_user_member extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function ambil_data_user_member(){
		$sql = "SELECT * FROM tbl_user where level=2 ORDER BY id_user DESC";
		$query = $this->db->query($sql);
		$row = $query->result();
		return $row;
	}

	function select_data_user_member($id_user){
		$sql = "SELECT * FROM tbl_user WHERE id_user = ?";
		$query = $this->db->query($sql, array($id_user));
		$row = $query->row();
		return $row;
	}

	function reset_password($id_user, $password){
		$this->db->update('tbl_user', ['password' => $password], ['id_user'=>$id_user]);
	}
}
?>