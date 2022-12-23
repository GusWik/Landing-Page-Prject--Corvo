<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

	
	public function index()
	{
        if(!empty($this->session->userdata('loginData'))){
            redirect('admin/dashboard');
        }
        
        $data['project_name'] = "Cloudaron HRIS";
        $data['established'] = "2010";
        $this->load->view('member/Login',$data);
	}
		
	public function doLogin() {
        $dataPost = $this->input->post();
        $login = $this->m_login->checkLogin($dataPost['username'], md5($dataPost['password']));
        if ($login) {
            redirect('admin/dashboard');  
        }else{
			$this->session->set_flashdata('GagalLogin', 'Ya');
            redirect('admin/login');
        }
    }
       
}
