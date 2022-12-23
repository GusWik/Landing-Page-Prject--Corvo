<?php
/**
 * 
 */
class M_services extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getGroup(){
		$this->db->select('*');
		$this->db->from('tbl_group_product_service');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getGroupById($id){
		$this->db->select('*');
		$this->db->from('tbl_group_product_service');
		$this->db->where('group_product_service_id', $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getProductServices(){
		$this->db->select('*');
		$this->db->from('tbl_product_service');
		$this->db->join('tbl_group_product_service','tbl_group_product_service.group_product_service_id = tbl_product_service.id_group_product_service');
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getProductServicesById($id){
		$this->db->select('*');
		$this->db->from('tbl_product_service');
		$this->db->where('product_service_id', $id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getManageStok($id_product = ""){
		$this->db->select('*');
		$this->db->from('tbl_manage_stok');
		if($id_product <> ""){
			$this->db->where('id_product_service', $id_product);
		}
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getPaket(){
		$this->db->select('*');
		$this->db->from('tbl_product_service');
		$this->db->where('id_group_product_service',6);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function getPaketById($id){
		$this->db->select('*');
		$this->db->from('tbl_product_service');
		$this->db->where('product_service_id',$id);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	
}

?>