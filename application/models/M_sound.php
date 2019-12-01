<?php 

class M_sound extends CI_Model{

	public function get($id = null){
		$this->db->from('t_sound');
		if($id != null){
			$this->db->where('sound_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function delete($id){
		$this->db->where('sound_id',$id);
		$this->db->delete('t_sound');
	}
	public function add($post){
		$kode = 'SO';
		$params = [
			'sound_id' => $kode.floor(microtime(true) * 231),
			'name' => $post['name'],
			'vendor' => $post['vendor'],
			'price' => $post['price'],
			'kategori' => $post['kategori'],
			'detail' => $post['detail']
		];
		$this->db->insert('t_sound',$params);
	}
	public function edit($post){
		$params = [
			'name' => $post['name'],
			'vendor' => $post['vendor'],
			'price' => $post['price'],
			'kategori' => $post['kategori'],
			'detail' => $post['detail']
		];
		$this->db->where('sound_id',$post['id']);
		$this->db->update('t_sound',$params);
	}
}