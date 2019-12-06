<?php 

class M_vendor extends CI_Model{
	private $_table = "t_vendor";

    public $id_vendor;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $img = "default.jpg";
   

    public function rules_edit()
    {

        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|callback_email_check'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'min_length[8]'],

            ['field' => 'passconf',
            'label' => 'pass confir',
            'rules' => 'matches[password]'],
            
            ['field' => 'phone',
            'label' => 'phone',
            'rules' => 'numeric'],
            
            ['field' => 'address',
            'label' => 'address',
            'rules' => 'required']
        ];
    }
    public function rules_add()
    {
        
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email|is_unique[t_vendor.email]'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required|min_length[8]'],

            ['field' => 'passconf',
            'label' => 'pass confir',
            'rules' => 'required|matches[password]'],
            
            ['field' => 'phone',
            'label' => 'phone',
            'rules' => 'numeric'],
            
            ['field' => 'address',
            'label' => 'address',
            'rules' => 'required']
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_vendor" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_vendor = floor(microtime(true));
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->phone = $post["phone"];
        $this->address = $post["address"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_vendor = $post["id"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
        $this->phone = $post["phone"];
        $this->address = $post["address"];
        $this->db->update($this->_table, $this, array('id_vendor' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_vendor" => $id));
    }
    
}