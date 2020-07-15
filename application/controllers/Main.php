<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['m_main','m_sound','m_tenda','m_dress','m_transport','m_photograp','m_makeup','m_kuade','m_gedung','m_catering','m_kursi']);
		// $this->load->library('cart');
		$this->load->library('form_validation');
	}
	public function index()
	{
		
		$data['products'] = $this->m_main->getAllProducts();
		$this->template->load('template-auth','main/beranda', $data);
	}
	public function profileVendor($id)
	{
		$data['vendor'] = $this->m_main->getVendorById($id);
		$data['tenda'] = $this->m_tenda->getByVendor($this->session->userdata('id_vendor'));
		$data['sound'] = $this->m_sound->getByVendor($this->session->userdata('id_vendor'));
		$data['dress'] = $this->m_dress->getByVendor($this->session->userdata('id_vendor'));
		$data['transport'] = $this->m_transport->getByVendor($this->session->userdata('id_vendor'));
		$data['photograp'] = $this->m_photograp->getByVendor($this->session->userdata('id_vendor'));
		$data['makeup'] = $this->m_makeup->getByVendor($this->session->userdata('id_vendor'));
		$data['kuade'] = $this->m_kuade->getByVendor($this->session->userdata('id_vendor'));
		$data['catering'] = $this->m_catering->getByVendor($this->session->userdata('id_vendor'));
		$data['gedung'] = $this->m_gedung->getByVendor($this->session->userdata('id_vendor'));
		$data['kursi'] = $this->m_kursi->getByVendor($this->session->userdata('id_vendor'));
		$this->template->load('template-auth','main/profile_vendor', $data);
	}
	public function product($id){
		$data['product'] = $this->m_main->getProductById($id);
		$this->template->load('template-auth','main/detail_product', $data);
	}
	
	public function cart(){
		$data['product'] = $this->m_main->get_wishlist_user();
		$this->template->load('template-auth', 'main/cart', $data);
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
	function shop_grid(){
		$this->template->load('template-auth', 'main/grid_shop');
	}
	
	function category($cat){
		$data['sound'] = null;
		$data['tenda'] = null;
		$data['dress'] = null;
		$data['trans'] = null;
		$data['photo'] = null;
		$data['makeup'] = null;
		$data['kuade'] = null;
		$data['gedung'] = null;
		$data['catering'] = null;
		$data['kursi'] = null;
 		if($cat == 'tenda'){
		$data['tenda'] = $this->m_tenda->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'dress') {
		$data['dress'] = $this->m_dress->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'trans') {
		$data['trans'] = $this->m_transport->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'photo') {
		$data['photo'] = $this->m_photograp->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'makeup') {
		$data['makeup'] = $this->m_makeup->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'kuade') {
		$data['kuade'] = $this->m_kuade->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'gedung') {
		$data['gedung'] = $this->m_gedung->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'kursi') {
		$data['kursi'] = $this->m_kursi->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'catering') {
		$data['catering'] = $this->m_catering->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}else if ($cat == 'sound') {
		$data['sound'] = $this->m_sound->getAll();
		$this->template->load('template-auth', 'main/grid_shop', $data);
		}
	}
	public function profile($id){
		$data['vendor'] = $this->m_main->getVendorById($id);
		$this->template->load('template-auth', 'main/profile', $data);
	}
	public function add_product(){
		
        $dress = $this->m_dress;
        $validation = $this->form_validation;
        $validation->set_rules($dress->rules());
        $post = $this->input->post();
        if ($validation->run() && $post['category'] == 'dress') {
            $this->m_dress->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'transp') {
        	$this->m_transport->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'sound') {
        	$this->m_sound->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'tenda') {
        	$this->m_tenda->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }
        else if ($validation->run() && $post['category'] == 'photo') {
        	$this->m_photograp->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'makeup') {
        	$this->m_makeup->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'kuade') {
        	$this->m_kuade->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'catering') {
        	$this->m_catering->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'gedung') {
        	$this->m_gedung->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }else if ($validation->run() && $post['category'] == 'kursi') {
        	$this->m_kursi->save($this->session->userdata('id_vendor'));
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }
        $data['selected'] = null;

        $this->template->load('template-auth','main/add_product',$data);
    
	}
}
