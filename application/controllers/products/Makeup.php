<?php 

class Makeup extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_makeup');
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
        $validation = $this->form_validation;
        $validation->set_rules($makeup->rules());

        if ($validation->run()) {
            $makeup->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/makeup');
        }

        $this->template->load('template','product/makeup/add_makeup');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/makeup');
       
        $makeup = $this->m_makeup;
        $validation = $this->form_validation;
        $validation->set_rules($makeup->rules());

        if ($validation->run()) {
            $makeup->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/makeup');
        }

        $data['makeup'] = $makeup->getById($id);
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