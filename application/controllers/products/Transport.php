<?php 

class Transport extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_transport','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['transport'] = $this->m_transport->getAll();
        $this->template->load('template','product/transport/transport_view',$data);
    }


    public function add()
    {
        $transport = $this->m_transport;
        $validation = $this->form_validation;
        $query_vendor = $this->m_vendor->getAll();
        $validation->set_rules($transport->rules());

        if ($validation->run()) {
            $transport->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/transport');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null;

        $this->template->load('template','product/transport/add_transport',$data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/transport');
       
        $transport = $this->m_transport;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($transport->rules());

        if ($validation->run()) {
            $transport->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/transport');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $tr = $transport->getById($id);
        $data['vendor'] = $vendor; 
        $data['selected'] = $tr->id_vendor;
        $data['transport'] = $tr;
        if (!$data['transport']) show_404();
        
        $this->template->load('template','product/transport/edit_transport',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_transport->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/transport'));
        }
    }
   

}