<?php 

class M_admin extends CI_Model{
	private $_table = "t_admin";

    public $username;
    public $name;
    public $password;
    public $img = "default.png";
   

    public function rules_edit()
    {

        return [

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'min_length[5]'],

            ['field' => 'passconf',
            'label' => 'pass confir',
            'rules' => 'matches[password]']
            
            
        ];
    }
    public function rules_add()
    {
        
        return [
        	['field' => 'username',
            'label' => 'username',
            'rules' => 'required|is_unique[t_admin.username]'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            // 'rules' => 'required|valid_email|is_unique[t_vendor.email]'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required|min_length[5]'],

            ['field' => 'passconf',
            'label' => 'pass confir',
            'rules' => 'required|matches[password]']
            
        ];
    }
    //for auth
	public function login($post){
		$this->db->select('*');
		$this->db->from('t_admin');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}
	public function get($id = null){
		$this->db->from('t_admin');
		if($id != null){
			$this->db->where('username',$id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["username" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->name = $post["name"];
        $this->password = md5($post["password"]);
        $this->img = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->name = $post["name"];
        $this->password = md5($post["password"]);
        if (!empty($_FILES["image"]["name"])) {
            $this->img = $this->_uploadImage();
        } else {
            $this->img = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('username' => $post['username']));
    }
    public function delete($username)
    {
        $this->_deleteImage($username);
        return $this->db->delete($this->_table, array("username" => $username));
    }

    private function _uploadImage(){

        $config['upload_path']          = './upload/admin/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'profile-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload("image")) {
            
            return $this->upload->data("file_name");
        }

        return "default.png";
        
    }
    private function _deleteImage($username){
        $admin = $this->getById($username);
        if ($admin->img != "default.png") {
            $filename = explode(".", $admin->img)[0];
            return array_map('unlink', glob(FCPATH."upload/admin/$filename.*"));
        }
    }
}