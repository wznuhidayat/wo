<?php 

class M_admin extends CI_Model{
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
		if(!$id != null){
			$this->db->where('username',$id);
		}
		$query = $this->db->get();
		return $query;
	}
}