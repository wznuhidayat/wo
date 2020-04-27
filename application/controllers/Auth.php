<?php 
 
class Auth extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        // check_not_login();
        $this->load->model('m_user');
        $this->load->library('form_validation');
    }
	public function login(){
		check_already_login();
		$this->template->load('template-auth','auth/login');

	}

	public function registration(){
		$user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_add());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('main');
        }

        $this->template->load('template-auth','auth/registration');
	}
	public function process(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			$query = $this->m_user->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'email_user' => $row->email_user,
					'name' => $row->name,
					'role' => $row->role
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Wellcome, Login Success');
					window.location='".site_url('admin/dashboard')."';
				</script>";
			}else{
				echo "<script>alert(' Login failed');
					window.location='".site_url('admin/login')."';
				</script>";
			}
		}

	}
	public function logout(){
		$params = array('username','name');
		$this->session->unset_userdata($params);
		redirect('admin/login');
	}
	public function process_admin(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['login'])){
			
			$query = $this->m_admin->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'username' => $row->username,
					'name' => $row->name,
					'img' => $row->img
				);
				$this->session->set_userdata($params);
				redirect('admin/dashboard');
			}else{
				echo "<script>alert(' Login failed');
					window.location='".site_url('admin/login')."';
				</script>";
			}
		}
	}
}