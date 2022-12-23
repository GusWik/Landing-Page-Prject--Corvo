<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->model('m_front');
        $this->load->model('m_kategori');
    }

	public function under_construction()
	{
		echo "Under Construction";
		die;
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
	

    public function index()
	{	
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		$data['dataProduk']		= $this->m_produk->getDataprodukByLimit();
		$data['dataKategori']		= $this->m_kategori->getDatakategori();
		$data['v_content'] 		= 'user/dashboard';
		$this->load->view('user/layout',$data);
	}

	public function produk()
	{
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		$data['dataProduk']		= $this->m_produk->getDataproduk();
		$data['dataKategori']		= $this->m_kategori->getDatakategori();
		$data['v_content'] 		= 'user/produk';
		$this->load->view('user/layout',$data);
	}

	public function produkKategori($id)
	{
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		
		$data['dataProduk']		= $this->m_produk->getDataprodukByKategori($id);
		$data['dataKategori']		= $this->m_kategori->getDatakategori();
		$data['v_content'] 		= 'user/produk';
		$this->load->view('user/layout',$data);
	}

	public function detailProduk($id)
	{
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		$data['detailProduk']		= $this->m_produk->getDetailproduk($id);
		$data['dataKategori']		= $this->m_kategori->getDatakategori();
		$data['v_content'] 		= 'user/detailProduk';
		$this->load->view('user/layout',$data);
	}

	public function addCart()
	{
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		if($data['customerLogin'] == ""){
			redirect('login/customer');
		}

		$post = $this->input->post();

		$cek = $this->m_front->cekDataCart($data['customerLogin']['UserID'], $post['id_produk']);

		if(!empty($cek)){
			$qty = $cek->qty + $post['quantity'];
			$dataArray = array(
			'id_customer'	=> $data['customerLogin']['UserID'],
			'id_produk'		=> $post['id_produk'],
			'qty'			=> $post['quantity']
			);
			$this->db->update('tb_cart',$dataArray,['cart_id' => $cek->cart_id]);
			
		}else{
			$dataArray = array(
			'id_customer'	=> $data['customerLogin']['UserID'],
			'id_produk'		=> $post['id_produk'],
			'qty'			=> $post['quantity']
			);
			$this->db->insert('tb_cart',$dataArray);
		}

		redirect('front/dashboard');
	}  


	public function cart()
	{
		$data['dataProduk']		= $this->m_produk->getDataproduk();
		$data['customerLogin'] 	= $this->session->userdata('loginDataCustomer');
		$data['dataCart']		= $this->m_front->getDataCart($data['customerLogin']['UserID']);

		if($_GET){
			$data['kodeVoucher'] = $this->m_front->getVoucher($_GET['voucher']);
		}
		$data['v_content'] 		= 'user/checkout';
		$this->load->view('user/layout',$data);
	} 

	public function deleteCart($id){
		
		$this->db->delete('tb_cart', ['cart_id' => $id]);
		redirect('front/dashboard');
	
	}

	public function addTransaksi()
	{
		$customerLogin		= $this->session->userdata('loginDataCustomer');
		$post = $this->input->post();
		
		$transaksi_no = $this->m_front->getNoTransaksi();
        $dataCart = $this->db->query("select sum(qty) as jml_beli, tb_cart.* from tb_cart where id_customer = '".$customerLogin['UserID']."' ")->result();
        foreach ($dataCart as $key => $value) {
            $hargaBarang = $this->db->query("select * from tb_produk where produk_id = '".$value->id_produk."'")->row();
            if (intval($hargaBarang->stok)< intval($value->jml_beli)) {
            	$this->generatePesan("Stok produk (".$hargaBarang->nama_produk.") kurang, tersisa ".$hargaBarang->stok, 'gagal');
                redirect('front/dashboard/cart/');
            }
        }

        $dataTransaksi = array(
        	'no_transaksi'		=> $transaksi_no,
        	'id_customer'		=> $customerLogin['UserID'],
        	'tgl_transaksi'		=> date('Y-m-d'),
        	'no_telp_pembeli'	=> $post['no_telp'],
        	'alamat_rumah'		=> $post['alamat'],
        	'jalan'				=> $post['street'],
        	'kode_pos'			=> $post['kodepos'],
        	'kota'				=> $post['locality'],
        	'tgl_pengiriman'	=> $post['day'],
        	'jam_pengiriman'	=> $post['jam'],
        	'payment_method'	=> $post['paymentmethod'],
        	'status'			=> 0
        );

        $this->db->insert('tb_transaksi', $dataTransaksi);
        $transaksi_id = $this->db->insert_id();

        $dataCart = $this->db->query("select * from tb_cart where id_customer = '".$customerLogin['UserID']."'")->result();
        foreach ($dataCart as $key => $values) {
            $hargaBarangNya = $this->db->query("select harga, stok from tb_produk where produk_id = '".$values->id_produk."'")->row();

            $dataDetail = array(
            	'id_transaksi'	=> $transaksi_id,
                'id_produk'		=> $values->id_produk,
                'harga_produk'	=> $hargaBarangNya->harga,
                'qty'			=> $values->qty,
                'sub_total'		=> $post['total_harga'],
            );

            $this->db->insert('tb_transaksi_detail',$dataDetail);

        }

        $this->db->delete('tb_cart',['id_customer' => $customerLogin['UserID']]);

        if($post['paymentmethod'] == 'cashondelivery'){
        	redirect('front/dashboard/orderSuccess/'.$transaksi_id);
        }else{
        	redirect('front/dashboard/uploadBukti/'.$transaksi_id);
        }
		
	}

	public function orderSuccess($id)
	{
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		$data['detailTransaksi']	= $this->m_front->getDataTransaksi($data['customerLogin']['UserID'], $id);
		$data['v_content'] 		= 'user/order_succes';
		$this->load->view('user/layout',$data);
	}

	public function uploadBukti($id)
	{
		$data['customerLogin'] 		= $this->session->userdata('loginDataCustomer');
		$data['detailTransaksi']	= $this->m_front->getDetailTransaksiNya($id);
		$data['v_content'] 		= 'user/uploadBukti';
		$this->load->view('user/layout',$data);
	}

	public function profil()
	{
		$data['customerLogin'] 	= $this->session->userdata('loginDataCustomer');
		$data['detailData']		= $this->m_front->getMyProfile($data['customerLogin']['UserID']);
		$data['v_content'] 		= 'front/dashboard/profile';
		$this->load->view('front/layout',$data);
	}

	public function updateProfile()
	{
		$customerLogin		= $this->session->userdata('loginDataCustomer');
		$post = $this->input->post();

		$insertArray = array(
            "customer"      => $post["name"],
            "no_hp"         => $post["no_hp"],
            "email"         => $post["email"],
            "alamat"        => $post["alamat"],

        );
        $login = $this->db->update('tb_customer',$insertArray, ['customer_id' => $customerLogin['UserID']]);

		redirect('front/dashboard');
	}

	public function doUploadBukti($id){
		$post = $this->input->post();
		$upload_path = 'uploads/bukti_bayar/';
		/*====================================== BEGIN UPLOADING FEATEURE IMAGE ======================================*/
			$photo = "";
			if ($_FILES['bukti']['name'] <> "") {
				$ext           = pathinfo($_FILES['bukti']['name'], PATHINFO_EXTENSION);
				$photo = date("dmYHis").rand(100,999).".".$ext;

				$config['upload_path']   = $upload_path;
				$config['allowed_types'] = '*';
				$config['file_name']     = $photo;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('bukti')){
					$error = 'error: '. $this->upload->display_errors();
					echo $error;
					die();
				}else{
					$photo = "/uploads/bukti_bayar/".$photo;
					$dataArray['bukti_pembayaran'] = $photo;
				}
			}
			/*====================================== END UPLOADING FEATEURE IMAGE ======================================*/

		$update = $this->db->update("tb_transaksi", $dataArray, ['transaksi_id' => $id]);
		redirect('front/dashboard/orderSuccess/'.$id);
	}

}
