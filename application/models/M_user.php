<?php

class M_user extends CI_Model {
	
	function getDataUser(){
		$this->db->select("*")
			->from("tb_user")
			->where("role !=", "karyawan");
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	function checkUsername($username){
		$this->db->select("*")
			->from("tb_user")
			->where("username", $username);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

	function getDetailUser($id){
		$this->db->select("*")
			->from("tb_user")
			->where("user_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}
}