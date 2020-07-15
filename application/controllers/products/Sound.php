<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sound extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_sound','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["sound"] = $this->m_sound->getAll();
        $this->template->load('template','product/sound/sound_view',$data);
    }


    public function add()
    {
        $sound = $this->m_sound;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($sound->rules());

        if ($validation->run()) {
            $sound->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/sound');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;
        $this->template->load('template','product/sound/add_sound',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/sound');
       
        $sound = $this->m_sound;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($sound->rules());

        if ($validation->run()) {
            $sound->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/sound');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $tn = $sound->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $tn->id_vendor;
        $data["sound"] = $tn;
        if (!$data["sound"]) show_404();
        
        $this->template->load('template','product/sound/edit_sound',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_sound->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/sound'));
        }
    }
}
