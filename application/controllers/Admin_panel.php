<?php
class Admin_panel extends CI_Controller{
	
	public function construct(){
		parent::_construct();
		$this->load->model('Admin_model');
		
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	
		public function index(){  
		$this->load->view('admin_login');  
	}  
		
	public function login_action(){
		
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$this->load->model('Admin_model');
		$result = $this->Admin_model->login($data);
		//echo "<pre>"; print_r($result); echo "</pre>"; exit;
		
		if($result){
			$this->session->set_userdata($data);
			$this->load->view('admin_duty');
		}else{
			$this->load->view('admin_login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('admin_login');
	}


	public function print_detail(){
	
		$this->load->model('Admin_model');
		$data['query'] = $this->Admin_model->get_details();
		$this->load->view('admin_dashboard',$data);
	}
	
	public function print_aboutUS_detail(){
	
		$this->load->model('Admin_model');
		$aboutUS_data['aboutUS_query'] = $this->Admin_model->get_aboutUS_details();
		$this->load->view('admin_aboutUS',$aboutUS_data);
	}
	
	public function print_product_detail(){
	
		$this->load->model('Admin_model');
		$product_data['product_query'] = $this->Admin_model->get_product_details();
		$this->load->view('admin_product',$product_data);
	}
	
	//updating home section.
	public function update_page_component(){
		$update_data = array(
			'header_h1' => $this->input->post('main_header'),
			'header_h5' => $this->input->post('sub_header'),
			'bg_image' => $this->input->post('bg_image')
		);
			
		//echo "<pre>"; print_r($update_data); echo "</pre>"; exit;
		$this->db->where('id', 0);
		$this->db->update('practice',$update_data);
		$this->load->view('admin_duty');
	}
	
	//updating about us section
	public function update_aboutUS_component(){
		$update_data = array(
			'heading' => $this->input->post('heading'),
			'logo' => $this->input->post('logo')
		);
			
		//echo "<pre>"; print_r($update_data); echo "</pre>"; exit;
		$this->db->where('id', 0);
		$this->db->update('about_us',$update_data);
		$this->load->view('admin_duty');
	}
	
	public function update_product_component(){
		$update_data = array(
			'p_heading' => $this->input->post('heading'),
			'product1_name' => $this->input->post('p1_name'),
			'product1_detail' => $this->input->post('p1_detail'),
			'product2_name' => $this->input->post('p2_name'),
			'product2_detail' => $this->input->post('p2_detail'),
			'product3_name' => $this->input->post('p3_name'),
			'product3_detail' => $this->input->post('p3_detail'),
			'product4_name' => $this->input->post('p4_name'),
			'product4_detail' => $this->input->post('p4_detail'),
		);
			
		//echo "<pre>"; print_r($update_data); echo "</pre>"; exit;
		$this->db->where('id', 0);
		$this->db->update('product_section',$update_data);
		$this->load->view('admin_duty');
	}
}
?>