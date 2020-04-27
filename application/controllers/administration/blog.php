<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index(){
		$this->template->load('template','admin/blog/blog_view');
	}
}
