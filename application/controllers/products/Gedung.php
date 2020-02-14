<?php 

class Gedung extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_gedung','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['gedung'] = $this->m_gedung->getAll();
        $this->template->load('template','product/gedung/gedung_view',$data);
    }


    public function add()
    {
        $gedung = $this->m_gedung;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($gedung->rules());

        if ($validation->run()) {
            $gedung->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/gedung');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/gedung/add_gedung',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/gedung');
       
        $gedung = $this->m_gedung;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($gedung->rules());

        if ($validation->run()) {
            $gedung->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/gedung');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $tr = $gedung->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $tr->id_vendor;
        $data['gedung'] = $tr;
        if (!$data['gedung']) show_404();
        
        $this->template->load('template','product/gedung/edit_gedung',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_gedung->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/gedung'));
        }
    }
   

}