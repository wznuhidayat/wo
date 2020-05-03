<?php 

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->m_user->getAll();
        $this->template->load('template','user/user_view',$data);
    }


    public function add()
    {
        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_add());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('user');
        }

        $this->template->load('template','user/add_user');
    }

    public function edit($email = null)
    {
        if (!isset($email)) redirect('user');
       
        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_edit());

        if ($validation->run()) {
            $user->update();
            if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', 'Data Successfully Added');
            }
            redirect('user');
        }

        $data['user'] = $user->getById($email);
        if (!$data['user']) show_404();
        
        $this->template->load('template','user/edit_user',$data);
    }

    public function delete($email=null)
    {
        if (!isset($email)) show_404();
        if ($this->m_user->delete($email)) {
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('deleted', 'Deleted Successfully');
            }
            redirect(site_url('user'));
        }
    }
    function email_check(){
        $post = $this->input->post();
        $query = $this->db->query("SELECT * FROM t_user WHERE email = '$post[email]' AND email != '$post[email]'");
        if ($query->num_rows() > 0){
                $this->form_validation->set_message('email_check', '{field} not allowed');
                return FALSE;
            }else{
                return TRUE;
                }
    }

}