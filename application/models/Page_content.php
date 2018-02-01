<?php
	
class Page_content extends CI_Model{
	
	public function get_home(){
		$sql = 'SELECT * FROM practice';
		$res = $this->db->query($sql);
		$data = $res->result();
		//echo "<pre>";print_r($data);echo "</pre>";exit;
		return $data[0];
	}
	
	public function get_about_us(){
		$sql = 'SELECT * FROM about_us';
		$res = $this->db->query($sql);
		$data = $res->result();
		//echo "<pre>";print_r($data);echo "</pre>";exit;
		return $data[0];
	}

	public function get_product_detail(){
		$sql = 'SELECT * FROM product_section';
		$res = $this->db->query($sql);
		$data = $res->result();
		//echo "<pre>";print_r($data);echo "</pre>";exit;
		return $data[0];
	}
}
?>