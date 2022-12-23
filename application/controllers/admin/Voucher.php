<?php

class Voucher extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_voucher");
		$this->load->model("m_produk");
		$this->load->model("m_umum");
	}

	public function index(){
		$getvoucher = $this->m_voucher->getDatavoucher();
		$data['listData'] = $getvoucher;

		$data['v_content'] = "member/voucher/daftar";
		$this->load->view("member/layout",$data);
	}

	public function add(){
		$data['dataProduk'] = $this->m_produk->getDataproduk();
		$data['v_content'] = "member/voucher/add";
		$this->load->view("member/layout",$data);
	}

	public function doadd(){
		$post = $this->input->post();

		$upload_path = './uploads/voucher/';
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
				$photo = "/uploads/voucher/".$photo;
			}
		}
		/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/
		
		$insertArray = [	
			"judul"     	=> $post['judul'],
			"kode_voucher"  => $post['kode_voucher'],
			"type_diskon"   => $post['type_diskon'],
			"potongan_diskon"   => $post['potongan_diskon'],
			"gambar"    	=> $photo,
		];
		$insert = $this->db->insert("tb_voucher", $insertArray);
		if ($insert) {
			$this->m_umum->generatePesan("Berhasil menambahkan data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal menambahkan data","gagal");
		}
		redirect('admin/voucher');
		
	}

	public function edit($id){
		$voucher = $this->m_voucher->getDetailvoucher($id);
		$data['detailData'] = $voucher;

		$data['v_content'] = "member/voucher/edit";
		$this->load->view("member/layout",$data);
	}

	public function doUpdate($id){
		$post = $this->input->post();

		$updateArray = [
			"id_produk"	=> $post['id_produk'],
			"judul"     => $post['judul'],
		];

		$upload_path = 'uploads/voucher/';
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
					$photo = "/uploads/voucher/".$photo;
					$dataArray['gambar'] = $photo;
				}
			}
			/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/

		$update = $this->db->update("tb_voucher", $updateArray, ['voucher_id' => $id]);
		if ($update) {
			$this->m_umum->generatePesan("Berhasil update data","berhasil");
		}else{
			$this->m_umum->generatePesan("Gagal update data","gagal");
		}
		
		redirect('admin/voucher');
	}

	public function doDelete($id){
		if ($id == 1) {
			$this->m_umum->generatePesan("Gagal hapus data","gagal");
			redirect('admin/voucher');
		}else{
			$this->db->delete('tb_voucher', ['voucher_id' => $id]);
			$this->m_umum->generatePesan("Berhasil hapus data","berhasil");
			redirect('admin/voucher');
		}
		
	}
}