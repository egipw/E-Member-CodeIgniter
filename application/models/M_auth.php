<?php
class M_auth extends CI_Model{	
	function __construct(){
		parent::__construct();		
	}

	function reset_password($email, $password){
		$this->db->update('tbl_user', ['password' => $password], ['email'=>$email]);
	}


	

}
?> 