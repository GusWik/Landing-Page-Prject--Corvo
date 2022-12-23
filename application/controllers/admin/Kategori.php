<?php

class Kategori extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_kategori");
		$this->load->model("m_umum");
	}

	public function index(){
		$getkategori = $this->m_kategori->getDatakategori();
		$data['listData'] = $getkategori;

		$data['v_content'] = "member/kategori/daftar";
		$this->load->view("member/layout",$data);
	}

	public function add(){
		$data['v_content'] = "member/kategori/add";
		$this->load->view("member/layout",$data);
	}

	public function doadd(){
		$post = $this->input->post();

		$upload_path = './uploads/kategori/';
		/*====================================== BEGIN UPLOADING FEATEURE IMAGE ======================================*/
		$photo = "";
		if ($_FILES['photo']['name'] <> "") {
			$ext           = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			$photo = "FI".date("dmYHis").rand(100,999).".".$ext;

			$config['upload_path']   = $upload_path;
			$config['allowed_types'] = '*';
			$config['file_name']     = $photo;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('photo')){
				$error = 'error: '. $this->upload->display_errors();
				echo $error;
				die();
			}else{
				$photo = "/uploads/kategori/".$photo;
			}
		}
		/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/
		
		$insertArray = [
			"nama_kategori"     => $post['nama_kategori'],
			"icon"     			=> $photo,
		];

		$insert = $this->db->insert("tb_kategori", $insertArray);
		if ($insert) {
			$this->m_umum->generatePesan("Berhasil menambahkan data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal menambahkan data","gagal");
		}
		redirect('admin/kategori');
		
	}

	public function edit($id){
		$kategori = $this->m_kategori->getDetailkategori($id);
		$data['detailData'] = $kategori;

		$data['v_content'] = "member/kategori/edit";
		$this->load->view("member/layout",$data);
	}

	public function doUpdate($id){
		$post = $this->input->post();

		$updateArray = [
			"nama_kategori"     => $post['nama_kategori']
		];

		
		$upload_path = 'uploads/kategori/';
		/*====================================== BEGIN UPLOADING FEATEURE IMAGE ======================================*/
			$photo = "";
			if ($_FILES['photo']['name'] <> "") {
				$ext           = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
				$photo = "FI".date("dmYHis").rand(100,999).".".$ext;

				$config['upload_path']   = $upload_path;
				$config['allowed_types'] = '*';
				$config['file_name']     = $photo;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('photo')){
					$error = 'error: '. $this->upload->display_errors();
					echo $error;
					die();
				}else{
					$photo = "/uploads/kategori/".$photo;
					$updateArray['icon'] = $photo;
				}
			}
			/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/

		$update = $this->db->update("tb_kategori", $updateArray, ['kategori_id' => $id]);
		if ($update) {
			$this->m_umum->generatePesan("Berhasil update data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal update data","gagal");
		}
		
		redirect('admin/kategori');
	}

	public function doDelete($id){
		if ($id == 1) {
			$this->m_umum->generatePesan("Gagal hapus data","gagal");
			redirect('admin/kategori');
		}else{
			$this->db->delete('tb_kategori', ['kategori_id' => $id]);
			$this->m_umum->generatePesan("Berhasil hapus data","berhasil");
			redirect('admin/kategori');
		}
		
	}
}