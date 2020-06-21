<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['m_main']);
		$this->load->library('cart');
	}
	public function index()
	{
		
		$data['products'] = $this->m_main->getAllProducts();
		$this->template->load('template-auth','main/beranda', $data);
	}
	public function profileVendor($id)
	{
		$data['vendor'] = $this->m_main->getVendorById($id);
		$this->template->load('template-auth','main/profile_vendor', $data);
	}
	public function product($id){
		$data['product'] = $this->m_main->getProductById($id);
		$this->template->load('template-auth','main/detail_product', $data);
	}
	
	public function cart(){
		$this->template->load('template-auth', 'main/cart');
	}
	public function countTotal(){
		echo $this->getTotal();
	}
	public function getTotal(){
		return count($this->m_main->get_wishlist_user());
	}


	//wishlist

	public function add_wishlist(){
		$this->m_main->insert_wishlist($this->input->post('kode'));
		$this->session->set_flashdata('success','Product successfully added to your wishlist');
		// echo $this->show_wishlist();
	}
	function show_wishlist(){
		echo json_encode($this->m_main->get_wishlist_user());
	}
	function remove_from_wishlist(){
		$this->m_main->remove_wishlist($this->input->post('kode'));
	}
}
