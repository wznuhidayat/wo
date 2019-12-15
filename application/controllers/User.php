<?php 


class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
	public function index(){
		check_not_login();
		// $this->load->model('m_user');
		$data['user'] = $this->m_user->get();
		$this->template->load('template','user/user_data',$data);
	}
	public function add(){
		
        $this->form_validation->set_rules('fullname', 'name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'password confir', 'required|matches[password]',array('required' => ' %s tidak sesuai.'));
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');

        $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
           if ($this->form_validation->run() == FALSE)
                {
                    $this->template->load('template','user/add_data');    
                }
                else
                {
                    $post = $this->input->post(null, TRUE);
                    $this->m_user->add($post);
                    if($this->db->affected_rows() > 0){
                        $this->session->set_flashdata('success', 'Data Successfully Added');
                    }
                    redirect('user');
                }
		
	}
    public function del(){
        $where = $this->input->post('email');
        $this->m_user->delete($where);
        if($this->db->affected_rows() > 0){
           $this->session->set_flashdata('deleted', 'deleted successfully');
        }
        redirect('user/index');
    }
    public function edit($email){
        
        $this->form_validation->set_rules('fullname', 'name', 'required');
        if($this->input->post('password')){
        $this->form_validation->set_rules('password', 'password', 'min_length[8]');
        $this->form_validation->set_rules('passconf', 'password confir', 'matches[password]',array('required' => ' %s tidak sesuai.'));
        }
        if($this->input->post('passconf')){
       
        $this->form_validation->set_rules('passconf', 'password confir', 'matches[password]',array('required' => ' %s tidak sesuai.'));
        }
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');

        $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
           if ($this->form_validation->run() == FALSE)
                {
                    $query = $this->m_user->get($email);
                    if($query->num_rows() > 0){
                        $data['user'] = $query->row();
                        $this->template->load('template','user/edit_data',$data);
                    }else{
                        $this->session->set_flashdata('success', 'Data Successfully Added');
                        redirect('user');
                    }
                        
                }
                else
                {
                    $post = $this->input->post(null, TRUE);
                    $this->m_user->edit($post);
                    if($this->db->affected_rows() > 0){
                       $this->session->set_flashdata('success', 'Data Successfully Added');
                    }
                    redirect('user');
                }
        
    }
}