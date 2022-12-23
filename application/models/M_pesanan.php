<?php

class M_pesanan extends CI_Model {
	
	function getDatapesanan(){
		$this->db->select("t.no_transaksi, t.transaksi_id, tp.nama_produk, dt.qty, dt.harga_produk, tc.customer, t.tgl_transaksi")
			->from("tb_transaksi as t")
			->join('tb_transaksi_detail as dt','dt.id_transaksi = t.transaksi_id')
			->join('tb_produk tp','tp.produk_id = dt.id_produk')
			->join('tb_customer tc','tc.customer_id = t.id_customer');
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	function getDatapesananByDate($dari,$sampai){
		$this->db->select("t.no_transaksi, t.transaksi_id, tp.nama_produk, dt.qty, dt.harga_produk, tc.customer, t.tgl_transaksi")
			->from("tb_transaksi as t")
			->join('tb_transaksi_detail as dt','dt.id_transaksi = t.transaksi_id')
			->join('tb_produk tp','tp.produk_id = dt.id_produk')
			->join('tb_customer tc','tc.customer_id = t.id_customer')
			->where('t.tgl_transaksi >=', $dari)
			->where('t.tgl_transaksi <=',$sampai);
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	function getDetailpesanan($id){
		$this->db->select("*")
			->from("tb_transaksi")
			->where("transaksi_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

	function getPesananDetail($id){
		$this->db->select("ttd.*, tp.nama_produk")
			->from("tb_transaksi_detail ttd")
			->join('tb_produk tp','tp.produk_id = ttd.id_produk')
			->where("id_transaksi", $id);
		$query  = $this->db->get();
		$result = $query->result();
		return $result;
	}

	function getDetailCustomer($id){
		$this->db->select("*")
			->from("tb_customer")
			->where("customer_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

}