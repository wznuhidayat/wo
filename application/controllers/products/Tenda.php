<?php 

class Tenda extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_tenda','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tenda"] = $this->m_tenda->getAll();
        $this->template->load('template','product/tenda/tenda_view',$data);
    }


    public function add()
    {
        $tenda = $this->m_tenda;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($tenda->rules());

        if ($validation->run()) {
            $tenda->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/tenda');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;
        $this->template->load('template','product/tenda/add_tenda',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/tenda');
       
        $tenda = $this->m_tenda;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($tenda->rules());

        if ($validation->run()) {
            $tenda->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/tenda');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $tn = $tenda->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $tn->id_vendor;
        $data["tenda"] = $tn;
        if (!$data["tenda"]) show_404();
        
        $this->template->load('template','product/tenda/edit_tenda',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_tenda->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/tenda'));
        }
    }
}