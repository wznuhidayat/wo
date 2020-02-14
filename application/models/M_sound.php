<?php 

class M_sound extends CI_Model{

	public function get($id = null){
		$this->db->select("t_sound.*, t_vendor.name as vendor_name");
		$this->db->from('t_sound');
		$this->db->join("t_vendor", "t_vendor.id_vendor = t_sound.id_vendor");
		if($id != null){
			$this->db->where('sound_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}
	public function delete($id){
		$this->_deleteImage($id);
		$this->db->where('sound_id',$id);
		$this->db->delete('t_sound');
	}
	public function imgFound($post){
		if(!empty($_FILES["image"]["name"])) {
        	return $this->_uploadImage();
        	die();
       	} else {
        	return $post["old_image"];
        }
	}
	public function add($post){
		$kode = 'SO';
		$params = [
			'sound_id' => $kode.floor(microtime(true) * 231),
			'name' => $post['name'],
			'id_vendor' => $post['id_vendor'],
			'price' => $post['price'],
			'kategori' => $post['kategori'],
			'detail' => $post['detail'],
			'img' => $this->_uploadImage()
		];
		$this->db->insert('t_sound',$params);
	}
	public function edit($post){
		$params = [
			'name' => $post['name'],
			'id_vendor' => $post['id_vendor'],
			'price' => $post['price'],
			'kategori' => $post['kategori'],
			'detail' => $post['detail'],
			'img' => $this->imgFound($post)
		];
		$this->db->where('sound_id',$post['id']);
		$this->db->update('t_sound',$params);
	}
	private function _uploadImage(){

        $config['upload_path']          = './upload/products/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            
            return $this->upload->data("file_name");
        }

        return "default.jpg";
        
    }
	private function _deleteImage($id){
        $sound = $this->get($id);
        if ($sound->img != "default.jpg") {
            $filename = explode(".", $sound->img)[0];
            return array_map('unlink', glob(FCPATH."upload/products/$filename.*"));
        }
    }
}