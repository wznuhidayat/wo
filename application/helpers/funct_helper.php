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
		redirect('admin/login');
	}
}