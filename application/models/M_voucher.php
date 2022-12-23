<?php

class M_voucher extends CI_Model {
	
	function getDatavoucher(){
		$this->db->select("tv.*, tp.nama_produk")
			->from("tb_voucher as tv")
			->join('tb_produk as tp','tp.produk_id = tv.id_produk','left');
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}
	function getDetailvoucher($id){
		$this->db->select("*")
			->from("tb_voucher")
			->where("voucher_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}
}