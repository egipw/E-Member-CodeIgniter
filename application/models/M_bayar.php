<?php
class M_bayar extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function select_data_member($id_user){
		$sql = "SELECT * FROM tbl_user WHERE id_user= ?";
		$query = $this->db->query($sql, array($id_user));
		$row = $query->row();
		return $row;
	}
}
?>