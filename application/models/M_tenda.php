<?php 

class M_tenda extends CI_Model{
	private $_table = "p_tenda";

    public $kode_tenda;
    public $name;
    public $vendor;
    public $price;
    public $discount;
    public $detail;
    public $img = "default.jpg";
   

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'vendor',
            'label' => 'Vendor',
            'rules' => 'required'],
            
            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
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
        return $this->db->get_where($this->_table, ["kode_tenda" => $id])->row();
    }

    public function save()
    {
    	$kode = 'TE';
        $post = $this->input->post();
        $this->kode_tenda = $kode.floor(microtime(true) * 231);
        $this->name = $post["name"];
        $this->vendor = $post["vendor"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        $this->detail = $post["detail"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_tenda = $post["id"];
        $this->name = $post["name"];
        $this->vendor = $post["vendor"];
        $this->price = $post["price"];
        $this->discount = $post["discount"];
        $this->detail = $post["detail"];
        $this->db->update($this->_table, $this, array('kode_tenda' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("kode_tenda" => $id));
    }
}