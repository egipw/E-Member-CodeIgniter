<?php
class M_member extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function ambil_data_member_baru(){
		$sql = "SELECT * FROM tbl_user WHERE status=2 AND level=2 ORDER BY id_user DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function select_data_member_baru($id_user){
		$sql = "SELECT * FROM tbl_user WHERE id_user = ?";
		$query = $this->db->query($sql, array($id_user));
		$row = $query->row();
		return $row;
	}

	function verifikasi($id_user, $status){
		$this->db->update('tbl_user', ['status' => $status], ['id_user'=>$id_user]);
	}

	function ambil_data_member(){
		$sql = "SELECT * FROM tbl_user WHERE status=1 AND level=2 ORDER BY id_user DESC";
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}

	function ambil_data_member_cetak($id_user){
		// $this->db->select('*');
		// $this->db->from('v_tbl_mahasiswa');
		// $this->db->where('id_cetak =', $this->session->id_user);
		$sql = "SELECT * FROM tbl_user WHERE id_user = ?";
		$query = $this->db->query($sql, array($id_user));
		return $query->row();
	}


}
?>