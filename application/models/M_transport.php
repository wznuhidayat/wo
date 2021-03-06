<?php 

class M_transport extends CI_Model{
	private $_table = "p_transport";

    public $kode_transport;
    public $name;
    public $id_vendor;
    public $price;
    public $category;
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
            
            ['field' => 'category',
            'label' => 'category',
            'rules' => 'required'],
            
            ['field' => 'detail',
            'label' => 'detail',
            'rules' => 'required']
        ];
    }
   


    public function getAll()
    {
        $this->db->select($this->_table.".*, t_vendor.name as vendor_name");
        $this->db->from($this->_table);
        $this->db->join("t_vendor", "t_vendor.id_vendor = ".$this->_table.".id_vendor");
        return $this->db->get()->result();
    }
    public function getByVendor($id)
    {
        $this->db->select($this->_table.".* ");
        return $this->db->get_where($this->_table, [ 'id_vendor' => $id])->result();
        
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_transport" => $id])->row();
    }

    public function save($ven = null)
    {
        $post = $this->input->post();
        $kode = 'TR';
        $this->kode_transport = $kode.floor(microtime(true)*321);
        $this->name = $post["name"];
        if ($ven != null) {
            $this->id_vendor = $ven;
        }else{
            $this->id_vendor = $post["id_vendor"];
        }
        $this->price = $post["price"];
        $this->category = $post["category"];
        $this->detail = $post["detail"];
        $this->img = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_transport = $post["id"];
        $this->name = $post["name"];
        $this->id_vendor = $post["id_vendor"];
        $this->price = $post["price"];
        $this->category = $post["category"];
        if (!empty($_FILES["image"]["name"])) {
            $this->img = $this->_uploadImage();
        } else {
            $this->img = $post["old_image"];
        }
        $this->detail = $post["detail"];
        $this->db->update($this->_table, $this, array('kode_transport' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("kode_transport" => $id));
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
        $transport = $this->getById($id);
        if ($transport->img != "default.jpg") {
            $filename = explode(".", $transport->img)[0];
            return array_map('unlink', glob(FCPATH."upload/products/$filename.*"));
        }
    }
}