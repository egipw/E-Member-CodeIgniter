<?php
class M_user_adm extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function ambil_data_user_adm(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('level =', '1');
		$query = $this->db->get();
		return $query->result();
	}

	function select_data_user_adm($id_user){
		$sql = "SELECT * FROM tbl_user WHERE id_user = ?";
		$query = $this->db->query($sql, array($id_user));
		$row = $query->row();
		return $row;
	}

	function tambah_user_adm($id_user, $email, $password, $nama, $level){
		$this->db->insert('tbl_user', ['id_user' => $id_user,'email' => $email, 'password' => $password, 'nama' => $nama, 'level' => $level]);
		return $this->db->insert_id();
	}

	function ubah_user_adm($nama, $email, $level, $id_user){
		$this->db->update('tbl_user', ['nama' => $nama, 'email' => $email, 'level' => $level], ['id_user'=>$id_user]);
	}

	function aksi_hapus($id_user){
		$this->db->delete('tbl_user', ['id_user' => $id_user]);
	}
}
?>