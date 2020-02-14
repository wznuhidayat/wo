<?php 

class Catering extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_catering','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['catering'] = $this->m_catering->getAll();
        $this->template->load('template','product/catering/catering_view',$data);
    }


    public function add()
    {
        $catering = $this->m_catering;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($catering->rules());

        if ($validation->run()) {
            $catering->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/catering');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/catering/add_catering',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/catering');
       
        $catering = $this->m_catering;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($catering->rules());

        if ($validation->run()) {
            $catering->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/catering');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $tr = $catering->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $tr->id_vendor;
        $data['catering'] = $tr;
        if (!$data['catering']) show_404();
        
        $this->template->load('template','product/catering/edit_catering',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_catering->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/catering'));
        }
    }
   

}