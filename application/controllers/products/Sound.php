<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sound extends CI_Controller {

	function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->helper('url');
        $this->load->model(['m_sound','m_vendor']);
        $this->load->library('form_validation');
    }
	public function index(){
		
		$data['sound'] = $this->m_sound->get();
		$this->template->load('template','product/sound/data_sound',$data);
	}
	public function del($id){
        $this->m_sound->delete($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('deleted', 'Deleted Successfully');
        }
        redirect('products/sound');
        //redirect('products/sound');
    }
    public function add(){
        $sound = new stdClass();
        $sound->sound_id = null;
        $sound->name = null;
        $sound->id_vendor = null;
        $sound->price = null;
        $sound->kategori = null;
        $sound->detail = null;
        $sound->img = null;

        $query_vendor = $this->m_vendor->getall();
        $vendor[null] = '- select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
         } 
        $data = array(
            'page' => 'add',
            'sound' => $sound,
            'vendor' => $vendor,
            'selected_vendor' => null
        );
        
        $this->template->load('template','product/sound/sound_view',$data);
    }
    public function edit($id){
        $query = $this->m_sound->get($id);
        if ($query->num_rows() > 0){
            $sound = $query->row();
            $query_vendor = $this->m_vendor->getall();
            $vendor[null] = '- select -';
            foreach ($query_vendor as $ven) {
                 $vendor[$ven->id_vendor] = $ven->id_vendor;
             } 
            $data = array(
                'page' => 'edit',
                'sound' => $sound,
                'vendor' => $vendor,
                'selected_vendor' => $sound->id_vendor
            );
            
            $this->template->load('template','product/sound/sound_view',$data);
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
            $this->session->set_flashdata('success', 'Data Successfully Added');
        }
        redirect('products/sound');
    }
}
