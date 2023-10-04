<?php
Class M_Login extends CI_Model{

	function auth_kader($username, $password){
		$query = $this->db->query("Select * from tbl_kader where username='$username' AND password='$password' limit 1");
		return $query;
	}

	function auth_ortu($username, $password){
		$query = $this->db->query("Select * from tbl_ortu where username='$username' AND password='$password' limit 1");
		return $query;
	}

}