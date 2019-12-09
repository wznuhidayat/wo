<?php 

class M_user extends CI_Model{
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