<?php

class User extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model("m_user");
		$this->load->model("m_umum");
	}

	public function index(){
		$getUser = $this->m_user->getDataUser();
		$data['listData'] = $getUser;

		$data['v_content'] = "member/user/daftar";
		$this->load->view("member/layout",$data);
	}

	public function add(){
		$data['v_content'] = "member/user/add";
		$this->load->view("member/layout",$data);
	}

	public function doadd(){
		$post = $this->input->post();

		$checkUsername = $this->m_user->checkUsername($post['username']);
		if (empty($checkUsername)) {
			$insertArray = [
				"nama"     => $post['nama'],
				"username" => $post['username'],
				"password" => md5($post['password']),
				'role'     => $post['role']
			];
			$insert = $this->db->insert("tb_user", $insertArray);
			if ($insert) {
				$this->m_umum->generatePesan("Berhasil menambahkan data","berhasil");
			}else{
				$this->m_umum->generatePesan("Gagal menambahkan data","gagal");
			}
			redirect('admin/user');
		}else{
			$this->m_umum->generatePesan("Username telah terdaftar","gagal");
			redirect("admin/user/add");
		}
	}

	public function edit($id){
		$user = $this->m_user->getDetailUser($id);
		$data['detailData'] = $user;

		$data['v_content'] = "member/user/edit";
		$this->load->view("member/layout",$data);
	}

	public function doUpdate($id){
		$post = $this->input->post();

		$updateArray = [
			"nama"     => $post['nama'],
			"username" => $post['username'],
			'role'     => $post['role']
		];

		if ($post['password'] != "") {
			$updateArray['password'] = md5($post['password']);
		}
		$update = $this->db->update("tb_user", $updateArray, ['user_id' => $id]);
		$this->m_umum->generatePesan("Berhasil update data","berhasil");
		redirect('admin/user');
	}

	public function doDelete($id){
		if ($id == 1) {
			$this->m_umum->generatePesan("Gagal hapus data","gagal");
			redirect('admin/user');
		}else{
			$this->db->delete('tb_user', ['user_id' => $id]);
			$this->m_umum->generatePesan("Berhasil hapus data","berhasil");
			redirect('admin/user');
		}
		
	}
}