<?php 
 
class Auth extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        // check_not_login();
        $this->load->model(['m_user','m_vendor']);
        $this->load->library('form_validation');
    }
	public function login(){
		
		$this->template->load('template-auth','auth/login');

	}

	public function registration(){
		$user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules_add());
        $post = $this->input->post();
        if ($validation->run()) {
            $user->saveUser();
            $params = array(
					'email' => $post["email"],
					'name' => $post["nameFirst"]." ".$post["nameSecond"],
				);
			$this->session->set_userdata($params);
            redirect('main');
        }

        $this->template->load('template-auth','auth/registration');
	}
	public function loginVendor(){
		$this->template->load('template-auth','auth/login-vendor');
	}
	public function vendorRegistration(){
		$vendor = $this->m_vendor;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules_vendor());

        if ($validation->run()) {
            $vendor->saveVendor();
            $params = array(
					'email' => $post["email"],
					'name' => $post["nameFirst"]." ".$post["nameSecond"],
				);
			$this->session->set_userdata($params);
            redirect('main');
        }

        $this->template->load('template-auth','auth/vendor-registration');
	}
	public function process(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['loginUser'])){
			$query = $this->m_user->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'email' => $row->email,
					'name' => $row->name,
					'img' => $row->img
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Wellcome, Login Success');
					window.location='".site_url('main')."';
				</script>";
			}else{
				 $this->session->set_flashdata('login-failed', 'Your email or password is inccorect');
				 redirect('auth/login');
			}
		}

	}
	public function processV(){
		$post = $this->input->post(null,TRUE);
		if(isset($post['loginVendor'])){
			$query = $this->m_vendor->login($post);
			if($query->num_rows()>0){
				$row = $query->row();
				$params = array(
					'id_vendor' => $row->id_vendor,
					'email' => $row->email,
					'name' => $row->name,
					'img' => $row->img
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Wellcome, Login Success');
					window.location='".site_url('main')."';
				</script>";
			}else{
				 $this->session->set_flashdata('login-failed', 'Your email or password is inccorect');
				 redirect('auth/loginVendor');
			}
		}

	}
	public function logoutUser(){
		$params = array('email','name','img');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
	public function logoutVendor(){
		$params = array('id_vendor','email','name','img');
		$this->session->unset_userdata($params);
		redirect('auth/loginVendor');
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