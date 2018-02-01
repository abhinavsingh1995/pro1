<?php
	
class Admin_model extends CI_Model{
	
	public function login($data) {
		//echo "<pre>"; print_r($data); echo "</pre>";	//Debug
		$sql = 'SELECT * FROM admin_details where username=? AND password=?';
		$res = $this->db->query($sql,array($data['username'], $data['password']));
		//echo "<pre>"; print_r($res); echo "</pre>"; exit;	//Debug

		if($res->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
	
	public function get_details(){
		$q = $this->db->get('practice');
		return $q->result();
	}
	
	public function get_aboutUS_details(){
		$q_aboutUS = $this->db->get('about_us');
		return $q_aboutUS->result();
	}
	
	public function get_product_details(){
		$q_product = $this->db->get('product_section');
		return $q_product->result();
	}
}
?>