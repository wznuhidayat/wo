<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sound extends CI_Controller {

	function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->helper('url');
        $this->load->model('m_sound');
        $this->load->library('form_validation');
    }
	public function index(){
		check_not_login();
		
		$data['sound'] = $this->m_sound->get();
		$this->template->load('template','product/data_sound',$data);
	}
	public function del($id){
        // $where = $this->input->post('sound_id');
        $this->m_sound->delete($id);
        redirect('products/sound');
    }
    public function add(){
        $sound = new stdClass();
        $sound->sound_id = null;
        $sound->name = null;
        $sound->vendor = null;
        $sound->price = null;
        $sound->kategori = null;
        $sound->detail = null;
        $sound->img = null;
        $data = array(
            'page' => 'add',
            'sound' => $sound
        );
        
        $this->template->load('template','product/sound_view',$data);
    }
    public function edit($id){
        $query = $this->m_sound->get($id);
        if ($query->num_rows() > 0){
            $sound = $query->row();
            $data = array(
                'page' => 'edit',
                'sound' => $sound
            );
            $this->template->load('template','product/sound_view',$data);
        }
    }
    public function process(){
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])){
            $this->m_sound->add($post);
        }else if(isset($_POST['edit'])){
            $this->m_sound->edit($post);
        }
        if($this->db->affected_rows() > 0){
            echo "<script>alert('Data saved');</script>";
        }
        echo "<script>window.location='".site_url('products/sound')."';</script>";
    }
}
