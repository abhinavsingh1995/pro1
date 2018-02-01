<?php
class Choco_controller extends CI_Controller{
	
	public function index(){
		$this->page_component();
	}

	public function page_component(){
		$this->load->model('Page_content');
		$db_content = $this->Page_content->get_home();
		$aboutus_content = $this->Page_content->get_about_us();
		$product_content = $this->Page_content->get_product_detail();
		//converting in array.
		$data = array(
			'main_heading' => $db_content->header_h1,
			'sub_heading' =>  $db_content->header_h5,
			'bg_image' => $db_content->bg_image,
			
			'heading' =>  $aboutus_content->heading,
			'logo' => $aboutus_content->logo,
			
			'product_heading' => $product_content->p_heading,
			'p1_name' => $product_content->product1_name,
			'p1_detail' => $product_content->product1_detail,
			'p2_name' => $product_content->product2_name,
			'p2_detail' => $product_content->product2_detail,
			'p3_name' => $product_content->product3_name,
			'p3_detail' => $product_content->product3_detail,
			'p4_name' => $product_content->product4_name,
			'p4_detail' => $product_content->product4_detail
		);
		//echo "<pre>"; print_r($data); echo "</pre>"; exit; //DEBUGGING
		$this->load->view('index',$data);
	}
/*
	public function aboutus_component(){
		$this->load->model('Page_content');
		$db_content = $this->Page_content->get_about_us();
		//converting in array.
		$data = array(
			'heading' =>  $db_content->heading,
			'logo' => $db_content->logo
		);
		$this->load->view('index',$data);
	}
*/
}	
	
?>