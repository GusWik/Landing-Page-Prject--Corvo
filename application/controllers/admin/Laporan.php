<?php

class Laporan extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_pesanan");
		$this->load->model("m_umum");
	}

	public function index(){
		$data['userLogin'] 			= $this->session->userdata('loginData');
		if($_GET){
			$data['listData'] = $this->m_pesanan->getDatapesananByDate($_GET['dari'], $_GET['sampai']);	
		}else{
			$data['listData'] = $this->m_pesanan->getDatapesanan();
		}

		$data['v_content'] = "member/dashboard/laporan";
		$this->load->view("member/layout",$data);
	}
}