<?php

class Pesanan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_pesanan");
		$this->load->model("m_umum");
	}

	public function index(){
		$getpesanan = $this->m_pesanan->getDatapesanan();
		$data['listData'] = $getpesanan;

		$data['v_content'] = "member/pesanan/daftar";
		$this->load->view("member/layout",$data);
	}

	public function detail($id){
		$pesanan = $this->m_pesanan->getDetailpesanan($id);
		$data['detailData'] = $pesanan;

		$data['detailPesanan'] = $this->m_pesanan->getPesananDetail($pesanan->transaksi_id);
		$data['detailCustomer'] = $this->m_pesanan->getDetailCustomer($pesanan->id_customer);
		$data['v_content'] = "member/pesanan/detail";
		$this->load->view("member/layout",$data);
	}
}