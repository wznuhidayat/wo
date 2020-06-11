<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_main');
		$this->load->library('cart');
	}
	public function index()
	{
		
		$data['products'] = $this->m_main->getAllProducts();
		$this->template->load('template-auth','main/beranda', $data);
	}
	public function profileVendor()
	{
		$this->template->load('template-auth','main/profile_vendor');
	}
	public function product($id){
		$data['product'] = $this->m_main->getProductById($id);
		$this->template->load('template-auth','main/detail_product',$data);
	}
	function addToCart()
	{
		$data = array(
			'id' => $this->input->post('kode'), 
			'name' => $this->input->post('name'), 
			'price' => $this->input->post('price'), 
			'qty' => 1, 
		);
		$this->cart->insert($data);
		echo $this->show_cart();

	}
	
	function removeItem($rowid){
        // Remove item from cart
        $remove = $this->cart->remove($rowid);
        
        // Redirect to the cart page
        redirect('main/cart');
    }
	public function cart(){
		$this->template->load('template-auth', 'main/cart');
	}
	public function countTotal(){
		echo $this->getTotal();
	}
	public function countItems(){
		echo $this->getViewItem();
	}
	public function getViewItem(){
		$output = '';
		$output .='<span id="countrow">'.count($this->cart->contents()).' Items</span>
					<a href="'.base_url('main/cart').'" class="pull-right">View Cart</a>
		';
		return $output;
	}
	public function getTotal(){
		return count($this->cart->contents());
	}
	
  	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<li>
                      <a class="remove" id="'.$items['rowid'].'" title="Remove this item"><i class="fa fa-trash"></i></a>
                      <a class="cart-img" href="#"><img src="'.base_url("upload/products/").'" alt="#"></a>
                      <h4><a href="#">'.$items['name'].'</a></h4>
                      <p class="quantity">'.$items['qty'].'x - <span class="amount">'.number_format($items['price']).'</span></p>
                    </li>
			';
		}
		
		return $output;
	}
	function load_cart(){ //load data cart
		echo $this->show_cart();
	}
	function removeCart(){
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		
		echo $this->show_cart();
		
	}
}
