<?php 

class M_main extends CI_Model{
	private $tables = array('p_tenda','p_kuade','p_makeup','p_photo','p_dress','p_kursi','t_sound','p_gedung','p_catering','p_transport');
	private $kodes = array('kode_tenda','kode_kuade','kode_makeup','kode_photograp','kode_dress','kode_kursi','sound_id','kode_gedung','kode_catering','kode_transport');
	public function getAllProducts(){

		// $this->db->select($this->_table.".*, p_dress.name as vendor_name");
  //       $this->db->from($this->_table);
  //       $this->db->join("p_dress", "p_dress.kode_dress = ".$this->_table.". kode_tenda");
		$query = $this->db->query('SELECT kode_tenda as kode, name, price, img,detail FROM p_tenda UNION SELECT kode_kuade, name, price, img,detail FROM p_kuade UNION SELECT kode_makeup, name, price, img,detail FROM p_makeup UNION SELECT kode_photograp,name, price, img,detail FROM p_photo UNION SELECT kode_dress, name, price, img,detail FROM p_dress UNION SELECT kode_kursi, name, price, img,detail FROM p_kursi UNION SELECT sound_id,name, price, img,detail FROM t_sound UNION SELECT kode_gedung,name, price, img,detail FROM p_gedung UNION SELECT kode_catering,name, price, img,detail FROM p_catering UNION SELECT kode_transport,name, price, img,detail FROM p_transport');
        return $query->result();
	}
	public function getProductById($id){
		$i;

		for ($i=0; $i < count($this->tables) ; $i++) {
			$this->db->select($this->tables[$i].".*, t_vendor.name as vendor_name");
			$query = $this->db->join("t_vendor", "t_vendor.id_vendor = ".$this->tables[$i].".id_vendor")->get_where($this->tables[$i], [$this->kodes[$i] => $id])->result();
			if($query != NULL){
				return $query;	
			}
		}
	 	
	}
	public function getVendorById($id){
		return $this->db->get_where('t_vendor', array("id_vendor" => $id))->result();
	}

	public function insert_wishlist($product_id)
	{
		$id_wishlist = floor(microtime(true));
		$query = "INSERT INTO t_wishlist(id_wishlist,kode_product, email,updated_at)
				  VALUES ('$id_wishlist',?,?,NOW())";
		$values = array($product_id,$this->session->userdata('email'));
		$this->db->query($query,$values);
	}
	public function get_wishlist_user(){
		$email = $this->session->userdata('email');
		$i;
		$data = array();
		$gtw = $this->db->get_where("t_wishlist", [ 'email'=> $email])->result_array();
		for ($i=0; $i <= count($gtw) ; $i++) {
			$this->db->select("t_wishlist .*, ".$this->tables[$i].".name as name ,".$this->tables[$i].".price as price ,".$this->tables[$i].".img as img ");
			$this->db->join($this->tables[$i], $this->tables[$i].".".$this->kodes[$i]." = 
				t_wishlist.kode_product");
			$query = $this->db->get_where("t_wishlist", [ 'email'=> $email])->row();
			if ($query != NULL) {
				array_push($data, $query);
			}
				
		}
		return $data;
		// return $this->db->get_where('t_wishlist', ['email' => $email])->result_array();
	}
	public function remove_wishlist($id){
		return $this->db->delete('t_wishlist', array("id_wishlist" => $id));
	}
}
