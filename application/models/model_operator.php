<?php
class model_operator extends CI_Model{


	function login($username, $password){
		//parameter yang diperlkan uname dan pass
		$chek = $this->db->get_where('operator',array('username' => $username,'password' => md5($password)));
		//cek datanya ada atau tidak
		if ($chek->num_rows() > 0 ){
			return 1;
		}else {
			return 0;
		}
	}
}

?>