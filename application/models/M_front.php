<?php

class M_front extends CI_Model {
	
	function getDataCart($id){
		$this->db->select("tc.*, tp.nama_produk, tp.harga, tp.gambar")
			->from("tb_cart as tc")
			->join('tb_produk as tp','tp.produk_id = tc.id_produk')
			->where('id_customer',$id);
		$query	= $this->db->get();
		$result = $query->result();
		return $result;
	}

	function cekDataCart($id,$id_produk){
		$this->db->select("*")
			->from("tb_cart")
			->where('id_customer',$id)
			->where('id_produk',$id_produk);
		$query	= $this->db->get();
		$result = $query->row();
		return $result;
	}

	function getDetailfront($id){
		$this->db->select("*")
			->from("tb_front")
			->where("front_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

	function getNoTransaksi(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_transaksi,4)) AS kd_max FROM tb_transaksi");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }

    function getDataTransaksi($id, $id_transaksi){
		$this->db->select("*")
			->from("tb_transaksi")
			->where('id_customer',$id)
			->where('transaksi_id', $id_transaksi)
			->where('status = 0')
			->where('tgl_transaksi',date('Y-m-d'));
		$query	= $this->db->get();
		$result = $query->row();
		return $result;
	}

	function getMyProfile($id){
		$this->db->select("*")
			->from("tb_customer")
			->where("customer_id", $id);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getVoucher($voucher){
		$this->db->select("*")
			->from("tb_voucher")
			->where("kode_voucher", $voucher);
		$query  = $this->db->get();
		$result = $query->row();
		return $result;
  	}


  	function getDetailTransaksiNya($id){
		$this->db->select("*")
			->from("tb_transaksi tt")
			->where('transaksi_id',$id);
		$query	= $this->db->get();
		$result = $query->row();
		return $result;
	}

}