<?php 

class Vendor extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_vendor');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['vendor'] = $this->m_vendor->getAll();
        $this->template->load('template','vendor/vendor_view',$data);
    }


    public function add()
    {
        $vendor = $this->m_vendor;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules_add());

        if ($validation->run()) {
            $vendor->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('vendor');
        }

        $this->template->load('template','vendor/add_vendor');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('vendor');
       
        $vendor = $this->m_vendor;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules_edit());

        if ($validation->run()) {
            $vendor->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('vendor');
        }

        $data['vendor'] = $vendor->getById($id);
        if (!$data['vendor']) show_404();
        
        $this->template->load('template','vendor/edit_vendor',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->m_vendor->delete($id)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('vendor'));
        }
    }
    function email_check(){
        $post = $this->input->post();
        $query = $this->db->query("SELECT * FROM t_vendor WHERE email = '$post[email]' AND id_vendor != '$post[id]'");
        if ($query->num_rows() > 0){
                $this->form_validation->set_message('email_check', '{field} not allowed');
                return FALSE;
            }else{
                return TRUE;
                }
    }

}