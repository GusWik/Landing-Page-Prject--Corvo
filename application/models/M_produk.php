<?php

class M_produk extends CI_Model {
	
	function getDataproduk(){
		$this->db->select('tb_produk.*, k.nama_kategori')
			->join('tb_kategori as k','k.kategori_id = tb_produk.id_kategori')
			->from("tb_produk");
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	function getDataprodukByLimit(){
		$this->db->select('tb_produk.*, k.nama_kategori')
			->join('tb_kategori as k','k.kategori_id = tb_produk.id_kategori')
			->from("tb_produk")
			->limit(6);
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	function getDetailproduk($id){
		$this->db->select("*")
			->from("tb_produk")
			->where("produk_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

	function getDataprodukByKategori($id){
		if($id ==  1){
			$where = '';
		}else{
			$where = 'WHERE id_kategori = '.$id;
		}

		$sql = "
				SELECT
					tb_produk.*, k.nama_kategori
				FROM
					tb_produk
				JOIN tb_kategori as k ON k.kategori_id = tb_produk.id_kategori
				
				$where
				";
		
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;
	}
}