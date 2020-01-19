<?php 

class Photograp extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model(['m_Photograp','m_vendor']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['Photograp'] = $this->m_Photograp->getAll();
        $this->template->load('template','product/Photograp/Photograp_view',$data);
    }


    public function add()
    {
        $Photograp = $this->m_Photograp;
        $query_vendor = $this->m_vendor->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($Photograp->rules());

        if ($validation->run()) {
            $Photograp->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('products/Photograp');
        }
        
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        $data['vendor'] = $vendor; 
        $data['selected'] = null; 
        $this->template->load('template','product/Photograp/add_Photograp', $data);
    }
    //controller
    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/Photograp');
        $query_vendor = $this->m_vendor->getAll();
        $Photograp = $this->m_Photograp;
        $validation = $this->form_validation;
        $validation->set_rules($Photograp->rules());

        if ($validation->run()) {
            $Photograp->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('products/Photograp');
        }
        $vendor[null] = '- Select -';
        foreach ($query_vendor as $ven) {
             $vendor[$ven->id_vendor] = $ven->id_vendor;
        }
        // $photo = new stdClass();
        $photo = $Photograp->getById($id);
        $data['Photograp'] = $photo;
        $data['vendor'] = $vendor; 
        $data['selected'] = $photo->id_vendor;
        if (!$data['Photograp']) show_404();
        
        $this->template->load('template','product/Photograp/edit_Photograp',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_Photograp->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('products/Photograp'));
        }
    }
   

}