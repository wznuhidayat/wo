<?php 

class Makeup extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_makeup','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['makeup'] = $this->m_makeup->getAll();
        $this->template->load('template','product/makeup/makeup_view',$data);
    }


    public function add()
    {
        $makeup = $this->m_makeup;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($makeup->rules());

        if ($validation->run()) {
            $makeup->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/makeup');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/makeup/add_makeup',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/makeup');
       
        $makeup = $this->m_makeup;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($makeup->rules());

        if ($validation->run()) {
            $makeup->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/makeup');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $mk = $makeup->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $mk->id_vendor;
        $data['makeup'] = $mk;
        if (!$data['makeup']) show_404();
        
        $this->template->load('template','product/makeup/edit_makeup',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_makeup->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/makeup'));
        }
    }
   

}