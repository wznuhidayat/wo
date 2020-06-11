<?php 

class M_main extends CI_Model{
	private $_table = "p_tenda";

	public function getAllProducts(){

		// $this->db->select($this->_table.".*, p_dress.name as vendor_name");
  //       $this->db->from($this->_table);
  //       $this->db->join("p_dress", "p_dress.kode_dress = ".$this->_table.". kode_tenda");
		$query = $this->db->query('SELECT kode_tenda as kode, name, price, img,detail FROM p_tenda UNION SELECT kode_kuade, name, price, img,detail FROM p_kuade UNION SELECT kode_makeup, name, price, img,detail FROM p_makeup UNION SELECT kode_photograp,name, price, img,detail FROM p_photo UNION SELECT kode_dress, name, price, img,detail FROM p_dress UNION SELECT kode_kursi, name, price, img,detail FROM p_kursi UNION SELECT sound_id,name, price, img,detail FROM t_sound UNION SELECT kode_gedung,name, price, img,detail FROM p_gedung UNION SELECT kode_catering,name, price, img,detail FROM p_catering UNION SELECT kode_transport,name, price, img,detail FROM p_transport');
        return $query->result();
	}
	public function getProductById($id){

		$tables = array('p_tenda','p_kuade','p_makeup','p_photo','p_dress','p_kursi','t_sound','p_gedung','p_catering','p_transport');
		$kodes = array('kode_tenda','kode_kuade','kode_makeukode','kode_kodehoto','kode_dress','kode_kursi','sound_id','kode_gedung','kode_catering','kode_transport');
		$i;
		for ($i=0; $i < 11 ; $i++) { 
			return $this->db->get_where($tables[$i], [".$kodes[$i]." => $id])->row();
		}
	 	
	}
	// public function validate_product($post)
	// {
	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('product_name', 'Product Name', 'required|is_unique[products.name]|min_length[3]');
	// 	if($this->form_validation->run() === FALSE)
	// 	{
	// 		return FALSE;
	// 	}
	// 	else
	// 	{
	// 		return TRUE;
	// 	}
	// }
	// public function insert_wishlist($product_id)
	// {
	// 	$query = "INSERT INTO wishlist(id_wishlist,kode_product,qty, email, updated_at)
	// 			  VALUES (?,?,?,?,NOW())";
	// 	$values = array($product_id,$this->session->userdata('email'));
	// 	$this->db->query($query,$values);
	// }
}
