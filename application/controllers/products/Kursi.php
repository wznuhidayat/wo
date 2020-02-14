<?php 

class Kursi extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_kursi','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kursi'] = $this->m_kursi->getAll();
        $this->template->load('template','product/kursi/kursi_view',$data);
    }


    public function add()
    {
        $kursi = $this->m_kursi;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($kursi->rules());

        if ($validation->run()) {
            $kursi->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/kursi');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/kursi/add_kursi',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/kursi');
       
        $kursi = $this->m_kursi;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($kursi->rules());

        if ($validation->run()) {
            $kursi->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/kursi');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $tr = $kursi->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $tr->id_vendor;
        $data['kursi'] = $tr;
        if (!$data['kursi']) show_404();
        
        $this->template->load('template','product/kursi/edit_kursi',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_kursi->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/kursi'));
        }
    }
   

}