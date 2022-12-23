<?php

class Kurir extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_kurir");
		$this->load->model("m_umum");
	}

	public function index(){
		$getkurir = $this->m_kurir->getDatakurir();
		$data['listData'] = $getkurir;

		$data['v_content'] = "member/kurir/daftar";
		$this->load->view("member/layout",$data);
	}

	public function add(){
		$data['v_content'] = "member/kurir/add";
		$this->load->view("member/layout",$data);
	}

	public function doadd(){
		$post = $this->input->post();

		
		$insertArray = [
			"nama_kurir"     	=> $post['nama_kurir'],
			"no_hp"     		=> $post['no_hp'],
			"jasa_pengiriman"   => $post['jasa_pengiriman'],
		];
		$insert = $this->db->insert("tb_kurir", $insertArray);
		if ($insert) {
			$this->m_umum->generatePesan("Berhasil menambahkan data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal menambahkan data","gagal");
		}
		redirect('admin/kurir');
		
	}

	public function edit($id){
		$kurir = $this->m_kurir->getDetailkurir($id);
		$data['detailData'] = $kurir;

		$data['v_content'] = "member/kurir/edit";
		$this->load->view("member/layout",$data);
	}

	public function doUpdate($id){
		$post = $this->input->post();

		$updateArray = [
			"nama_kurir"     	=> $post['nama_kurir'],
			"no_hp"     		=> $post['no_hp'],
			"jasa_pengiriman"   => $post['jasa_pengiriman'],
		];

		$update = $this->db->update("tb_kurir", $updateArray, ['kurir_id' => $id]);
		if ($update) {
			$this->m_umum->generatePesan("Berhasil update data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal update data","gagal");
		}
		
		redirect('admin/kurir');
	}

	public function doDelete($id){
		if ($id == 1) {
			$this->m_umum->generatePesan("Gagal hapus data","gagal");
			redirect('admin/kurir');
		}else{
			$this->db->delete('tb_kurir', ['kurir_id' => $id]);
			$this->m_umum->generatePesan("Berhasil hapus data","berhasil");
			redirect('admin/kurir');
		}
		
	}
}