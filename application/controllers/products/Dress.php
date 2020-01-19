<?php 

class Dress extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_dress','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['dress'] = $this->m_dress->getAll();
        $this->template->load('template','product/dress/dress_view',$data);
    }


    public function add()
    {
        $dress = $this->m_dress;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($dress->rules());

        if ($validation->run()) {
            $dress->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/dress');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/dress/add_dress');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/dress');
       
        $dress = $this->m_dress;
        $validation = $this->form_validation;
        $validation->set_rules($dress->rules());

        if ($validation->run()) {
            $dress->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/dress');
        }

        $data['dress'] = $dress->getById($id);
        if (!$data['dress']) show_404();
        
        $this->template->load('template','product/dress/edit_dress',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_dress->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/dress'));
        }
    }
   

}