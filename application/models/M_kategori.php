<?php

class M_kategori extends CI_Model {
	
	function getDatakategori(){
		$this->db->select("*")
			->from("tb_kategori");
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}
	function getDetailkategori($id){
		$this->db->select("*")
			->from("tb_kategori")
			->where("kategori_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}
}