<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	// public __construct(){

	// }
	public function index()
	{
		$this->template->load('template-auth','main/beranda');
	}
	public function profileVendor()
	{
		$this->template->load('template-auth','main/profile_vendor');
	}
	public function product(){
		$this->template->load('template-auth','main/detail_product');
	}
}
