<?php 	

function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('name');
	if($user_session){
		redirect('admin/dashboard');
	}
}
function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('name');
	if(!$user_session){
		echo "<script>alert(' Login failed');
					window.location='".site_url('admin/login')."';
				</script>";
	}
}

function check_user_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('name');
	if($user_session){
		redirect('main');
	}
}
function check__user_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('name');
	if(!$user_session){
		echo "<script>alert(' Login failed');
					window.location='".site_url('auth/login')."';
				</script>";
	}
}

function check_user(){
	$ci =& get_instance();
	$ci->load->libray('funct');
	if($ci->funct->user_login() == '1'){
		return TRUE;
	}
}