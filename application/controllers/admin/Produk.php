<?php

class Produk extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_produk");
		$this->load->model("m_kategori");
		$this->load->model("m_umum");
	}

	public function index(){
		$getproduk = $this->m_produk->getDataproduk();
		$data['listData'] = $getproduk;

		$data['v_content'] = "member/produk/daftar";
		$this->load->view("member/layout",$data);
	}

	public function add(){
		$data['v_content'] = "member/produk/add";
		$data['dataKategori']	= $this->m_kategori->getDatakategori();
		$this->load->view("member/layout",$data);
	}

	public function doadd(){
		$post = $this->input->post();
		
		$upload_path = './uploads/produk/';
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
				$photo = "/uploads/produk/".$photo;
			}
		}
		/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/

		$insertArray = [
			"id_kategori"   => $post['id_kategori'],
			"kode_produk"   => $post['kode_produk'],
			"nama_produk"   => $post['nama_produk'],
			"harga"     	=> $post['harga'],
			"stok"     		=> $post['stok'],
			"gambar"     	=> $photo,
			"deskripsi"     => $post['deskripsi'],
		];
		$insert = $this->db->insert("tb_produk", $insertArray);
		if ($insert) {
			$this->m_umum->generatePesan("Berhasil menambahkan data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal menambahkan data","gagal");
		}
		redirect('admin/produk');
		
	}

	public function edit($id){
		$produk = $this->m_produk->getDetailproduk($id);
		$data['detailData'] = $produk;
		$data['dataKategori']	= $this->m_kategori->getDatakategori();
		$data['v_content'] = "member/produk/edit";
		$this->load->view("member/layout",$data);
	}

	public function doUpdate($id){
		$post = $this->input->post();

		$updateArray = [
			"id_kategori"   => $post['id_kategori'],
			"kode_produk"   => $post['kode_produk'],
			"nama_produk"   => $post['nama_produk'],
			"harga"     	=> $post['harga'],
			"stok"     		=> $post['stok'],
			"deskripsi"     => $post['deskripsi'],
		];

		$upload_path = 'uploads/produk/';
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
					$photo = "/uploads/produk/".$photo;
					$updateArray['gambar'] = $photo;
				}
			}
			/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/

		
		$update = $this->db->update("tb_produk", $updateArray, ['produk_id' => $id]);
		if ($update) {
			$this->m_umum->generatePesan("Berhasil update data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal update data","gagal");
		}
		redirect('admin/produk');
	}

	public function doDelete($id){
		
			$this->db->delete('tb_produk', ['produk_id' => $id]);
			$this->m_umum->generatePesan("Berhasil hapus data","berhasil");
			redirect('admin/produk');
		
	}
}