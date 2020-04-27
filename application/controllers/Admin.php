<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		// check_not_login();
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		check_not_login();
		$this->template->load('template','dashboard');
	}
	public function dashboard()
	{
		check_not_login();
		$this->template->load('template','dashboard');
	}
	public function login(){
		check_already_login();
		$this->load->view("auth/login-admin");
	}
	public function list_view()
    {

        $data['admin'] = $this->m_admin->getAll();
        $this->template->load('template','admin/admin/admin_list',$data);
    }


    public function add()
    {
        $admin = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules_add());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('admin/list_view');
        }

        $this->template->load('template','admin/admin/add_admin');
    }

    public function edit($username = null)
    {
        if (!isset($username)) redirect('admin/list_view');
       
        $admin = $this->m_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules_edit());

        if ($validation->run()) {
            $admin->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('admin/list_view');
        }

        $data['admin'] = $admin->getById($username);
        if (!$data['admin']) show_404();
        
        $this->template->load('template','admin/admin/edit_admin',$data);
    }
    public function delete($username=null)
    {
        if (!isset($username)) show_404();
        if ($this->m_admin->delete($username)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('admin/list_view'));
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
