<?php 
 
class M_user extends CI_Model{
	private $_table = "t_user";
	public function rules_add()
    {
        
        return [
            ['field' => 'nameFirst',
            'label' => 'nameFirst',
            'rules' => 'required'],

             ['field' => 'nameSecond',
            'label' => 'nameSecond',
            'rules' => 'required'],

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
    public function save()
    {
        $post = $this->input->post();
        // $this->id_vendor = floor(microtime(true));
        $this->name = $post["nameFirst"] + $post["nameSecond"];
        $this->email = $post["email"];
        $this->password = md5($post["password"]);
        // $this->phone = $post["phone"];
        // $this->address = $post["address"];
        // $this->img = $this->_uploadImage();
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
	public function edit($post){
		$params['name'] = $post['fullname'];
		$params['email'] = $post['email'];
		if(!empty($post['password'])){
			$params['password'] = md5($post['password']);
		}
		
		$params['phone'] = $post['phone'];
		$params['address'] = $post['address'];
		$params['gender'] = $post['gender'];
		$this->db->where('email',$post['email']);
		$this->db->update('t_user',$params);
	}
	public function delete($email){
		$this->db->where('email',$email);
		$this->db->delete('t_user');
	}
}