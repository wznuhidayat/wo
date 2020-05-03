<?php 

class Funct{

	protected $ci;

	function __construct(){
		$this->ci =& get_instance();

	}
	function user_login(){
		$email_user = $this->ci->session->userdata('email');
		$user_data = $this->ci->m_user->get($email_user)->row();
		return $user_data;
	}
	function admin_login(){
		$username = $this->ci->session->userdata('username');
		$user_data = $this->ci->m_admin->get($username)->row();
		return $user_data;
	}
}