<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->model('m_front');
        $this->load->model('m_kategori');
    }

	
	public function index()
    {
        $data['dataProduk']     = $this->m_produk->getDataproduk();
        $data['customerLogin']      = $this->session->userdata('loginDataCustomer');
        $data['dataProduk']     = $this->m_produk->getDataprodukByLimit();
        $data['dataKategori']       = $this->m_kategori->getDatakategori();
        $data['v_content']      = 'user/dashboard';
        $this->load->view('user/layout',$data);
    }
}
