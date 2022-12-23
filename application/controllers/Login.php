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
            redirect('admin/dashboard'); //cek jika sudah login akan re-direct ke hal dashboard, kalau sdh login jalankan view login
        }
        $this->load->view('member/Login');
	}
		
	public function doLogin() {
        $dataPost = $this->input->post();
        
        $login = $this->m_login->checkLogin($dataPost['username'], md5($dataPost['password']));
       
        if ($login) {
            redirect('admin/dashboard');  
        }else{
			$this->session->set_flashdata('GagalLogin', 'Ya');
            redirect('login');
        }
    }

    public function register()
    {
        if(!empty($this->session->userdata('loginData'))){
            redirect('admin/dashboard');
        }
        $data['project_name'] = "Cloudaron HRIS";
        $data['established'] = "2021";
        $this->load->view('member/register',$data);
    }

    function log(){
        $this->session->unset_userdata('loginData');
        redirect('login');
    }

    public function customer()
    {
        $this->load->view("user/login");

    }

    public function doLoginCustomer() {
        $dataPost = $this->input->post();
        $cek = $this->db->query("SELECT * FROM tb_customer where username = '".$dataPost['username']."' AND password = '".md5($dataPost['password'])."'")->row();
        $login = $this->m_login->checkLoginCustomer($dataPost['username'], md5($dataPost['password']));
        
        if($login != ''){
            if ($login) {
                redirect('front/dashboard');
            }else{
                $this->generatePesan('Login Gagal', 'gagal');
                redirect('login/customer');
            }
        }else{
            $this->generatePesan('Login Gagal / Verifikasi Email Kamu', 'gagal');
            redirect('login/customer/'.$cek->customer_id);
        }
    }

    public function registerCustomer()
    {
       
        $this->load->view("user/register");

    }

    public function doRegisterCustomer(){
        $post = $this->input->post();

        $rand = rand(000000,999999);
        $insertArray = array(
            "customer"      => $post["name"],
            "no_hp"         => $post["number"],
            "email"         => $post["email"],
            "username"      => $post["username"],
            "password"      => md5($post["password"]),
            'verifikasi_code'   => $rand

        );
        $login = $this->db->insert('tb_customer',$insertArray);
        $last_id = $this->db->insert_id();
        if ($login) {
            // Konfigurasi email
            $config = [
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'protocol'  => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_user' => 'tg7691153@gmail.com',  // Email gmail
                'smtp_pass'   => 'Dimanakah123',  // Password gmail
                'smtp_crypto' => 'ssl',
                'smtp_port'   => 465,
                'crlf'    => "\r\n",
                'newline' => "\r\n"
            ];

            // Load library email dan konfigurasinya
            $this->load->library('email', $config);

            // Email dan nama pengirim
            $this->email->from('tg7691153@gmail.com', 'Bako - Mart');

            // Email penerima
            $this->email->to($post['email']); // Ganti dengan email tujuan

            // Lampiran email, isi dengan url/path file
            //$this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

            // Subject email
            $this->email->subject('Verifikasi Email | Bako - Mart');

            // Isi email
            $this->email->message("Jangan sebar kode ini kesiapapun !. Masukan Kode Verifikasi (OTP) ".$rand);

            // Tampilkan pesan sukses atau error
            if ($this->email->send()) {
                echo 'Sukses! email berhasil dikirim.';
            } else {
                echo 'Error! email tidak dapat dikirim.';
            }

            $this->generatePesan('Register Berhasil', 'berhasil');
            redirect('login/customer/'.$last_id);  
        }else{
            $this->generatePesan('Register Gagal', 'gagal');
            redirect('login/customer');
        }   
    }

     public function verifikasi($id) {
        $post = $this->input->post();
        $cek = $this->db->query("SELECT * FROM tb_customer where customer_id = '".$id."' AND verifikasi_code = '".$post['kode']."'")->row();
        
        if($cek != ''){
            $dataUpdate = array(
                'is_verifikasi' => 1
            );
            $this->db->update('tb_customer', $dataUpdate, ['customer_id' => $id]);

            $this->generatePesan('Verifikasi Kode Berhasil', 'berhasil');
            redirect('login/customer');
        }else{
            $this->generatePesan('Verifikasi Kode Gagal', 'gagal');
            redirect('login/customer/'.$id);
        }
    }


    function logout_customer(){
        $this->session->unset_userdata('loginDataCustomer');
        redirect('front/dashboard');
    }

    function generatePesan($pesan, $type) {
        if ($type == "berhasil") {
            $str = '<div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                        </button>

                        <!--<i class="ace-icon fa fa-check green"></i>-->
                        '.$pesan.'
                    </div>';
        } elseif($type=="gagal") {
            $str = '<div class="alert alert-block alert-danger">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                        </button>

                        <!--<i class="ace-icon fa fa-times red"></i>-->
                        '.$pesan.'
                    </div>';
        }else{
            $str = '<div class="alert alert-block alert-warning">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                        </button>

                        
                        '.$pesan.'
                    </div>';
        }
        
        $this->session->set_flashdata('msgbox',$str);

        return $str;
    }
       
}
