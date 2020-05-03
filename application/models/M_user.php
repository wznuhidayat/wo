<?php 
 
class M_user extends CI_Model{
	private $_table = "t_user";

    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $gender;
    public $img = "default.jpg";
   
	public function rules_add()
    {
        
        return [
            

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|is_unique[t_user.email]'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required|min_length[8]'],

            ['field' => 'passconf',
            'label' => 'pass confir',
            'rules' => 'required|matches[password]']
            
        ];
    }
    public function rules_edit()
    {
        
        return [
            
        	
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|callback_email_check'],

            
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["email" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        
        $this->name = $post["nameFirst"] + $post["nameSecond"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
        $this->phone = $post["phone"];
        $this->address = $post["address"];
        $this->gender = $post["gender"];
        $this->img = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

	public function login($post){
		$this->db->select('*');
		$this->db->from('t_user');
		$this->db->where('email', $post['email']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}
	public function get($email = null){
		$this->db->from('t_user');
		if($email != null){
			$this->db->where('email',$email);
		}
		$query = $this->db->get();
		return $query;
	}
	public function add($post){
		$params['name'] = $post['fullname'];
		$params['email'] = $post['email'];
		$params['password'] = md5($post['password']);
		$params['phone'] = $post['phone'];
		$params['gender'] = $post['gender'];
		$params['address'] = $post['address'];
		$this->db->insert('t_user',$params);
	}
	public function update()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
        $this->phone = $post["phone"];
        if (!empty($_FILES["image"]["name"])) {
            $this->img = $this->_uploadImage();
        } else {
            $this->img = $post["old_image"];
        }
        $this->gender = $post["gender"]
;        $this->address = $post["address"];
        $this->db->update($this->_table, $this, array('email' => $post['email']));
    }
	 public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("email" => $id));
    }

    private function _uploadImage(){

        $config['upload_path']          = './upload/user/';
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

        return "default.jpg";
        
    }
     private function _deleteImage($id){
        $user = $this->getById($id);
        if ($user->img != "default.jpg") {
            $filename = explode(".", $user->img)[0];
            return array_map('unlink', glob(FCPATH."upload/user/$filename.*"));
        }
    }
}