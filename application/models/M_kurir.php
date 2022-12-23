<?php

class M_kurir extends CI_Model {
	
	function getDatakurir(){
		$this->db->select("*")
			->from("tb_kurir");
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}
	function getDetailkurir($id){
		$this->db->select("*")
			->from("tb_kurir")
			->where("kurir_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}
}