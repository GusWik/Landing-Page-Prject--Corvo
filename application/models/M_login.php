<?php

class M_login extends CI_Model {
    // select * from tb_user where username = 'blablabla' and password = 'blablabla'
    function checkLogin($username,$password){
        $this->db->select('*');
        $this->db->from('tb_user u');
        $this->db->where('u.username', $username);
        $this->db->where('u.password', $password);
        $query = $this->db->get(); //get data
        if($query->num_rows()>0){  //function hitung, jika data >0
			$querycheck = $query->row(); //row= ambil 1 data saja
			$dataArr = array( //Variable: dataArr
                'UserID'   => $querycheck->user_id,
                'Username' => $querycheck->username,
                "Role"     => $querycheck->role  //where from table user
			); 
			$this->session->set_userdata('loginData',$dataArr); //function session menampung di login data dan dataArr
            return true;
        }else{ 
            return false;
        }
	}

	
	public function checkLoginCustomer($username,$password){
        $this->db->select('*');
        $this->db->from('tb_customer u');
        $this->db->where('u.username', $username);
        $this->db->where('u.password', $password);
        $this->db->where('u.is_verifikasi = 1');
        $query = $this->db->get();
        if($query->num_rows()>0){
			$querycheck = $query->row();
			$dataArr = array(
				'UserID'    	=> $querycheck->customer_id,
                'Username'      => $querycheck->username,
                'Name'         => $querycheck->customer,
				'is_verifikasi'  	   => $querycheck->is_verifikasi
			);
			$this->session->set_userdata('loginDataCustomer',$dataArr);
            return true;
        }else{ 
            return false;
        }
	}

}
