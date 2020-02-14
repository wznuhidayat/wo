<?php 

class Kuade extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_kuade','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kuade'] = $this->m_kuade->getAll();
        $this->template->load('template','product/kuade/kuade_view',$data);
    }


    public function add()
    {
        $kuade = $this->m_kuade;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($kuade->rules());

        if ($validation->run()) {
            $kuade->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/kuade');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/kuade/add_kuade',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/kuade');
       
        $kuade = $this->m_kuade;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($kuade->rules());

        if ($validation->run()) {
            $kuade->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/kuade');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }

        $ku = $kuade->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $ku->id_vendor;
        $data['kuade'] = $ku;
        if (!$data['kuade']) show_404();
        
        $this->template->load('template','product/kuade/edit_kuade',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_kuade->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/kuade'));
        }
    }
   

}