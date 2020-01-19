<?php 

class M_Photograp extends CI_Model{
	private $_table = "p_photo";

    public $kode_photograp;
    public $name;
    public $id_vendor;
    public $price;
    public $type;
    public $detail;
    public $img = "default.jpg";
   

    public function rules()
    {

        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'price',
            'rules' => 'required|numeric'],
            
            ['field' => 'type',
            'label' => 'type',
            'rules' => 'required'],
            
            ['field' => 'detail',
            'label' => 'detail',
            'rules' => 'required']
        ];
    }
   


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_Photograp" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $kode = 'PH';
        $this->kode_photograp = $kode.floor(microtime(true)*321);
        $this->name = $post["name"];
        $this->id_vendor = $post["id_vendor"];
        $this->price = $post["price"];
        $this->type = $post["type"];
        $this->detail = $post["detail"];
        $this->img = $this->_uploadImage();



        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_photograp = $post["id"];
        $this->name = $post["name"];
        $this->id_vendor = $post["id_vendor"];
        $this->price = $post["price"];
        $this->type = $post["type"];
        if (!empty($_FILES["image"]["name"])) {
            $this->img = $this->_uploadImage();
        } else {
            $this->img = $post["old_image"];
        }
        $this->detail = $post["detail"];
        $this->db->update($this->_table, $this, array('kode_photograp' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kode_photograp" => $id));
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

        if ($this->upload->do_upload("image")) {
            
            return $this->upload->data("file_name");
        }

        return "default.jpg";
        
    }
    private function _deleteImage($id){
        $Photograp = $this->getById($id);
        if ($Photograp->img != "default.jpg") {
            $filename = explode(".", $Photograp->img)[0];
            return array_map('unlink', glob(FCPATH."upload/products/$filename.*"));
        }
    }
}