<?php 


class Vendor extends CI_Controller{
	public function index(){
		check_not_login();
		$data['vendor'] = $this->m_vendor->display_data()->result();
		
		$this->template->load('template','vendor',$data);
	}
	public function add_action(){
		$id = rand(00000000,99999999);		
		$vendor_list = $this->db->query("SELECT * FROM vendor");
		while ($user = $vendor_list->result_array())
		{
		    if ($id == $user['id_vendor'])
		    {
		        echo('Already exist.');
		    }
		    else
		    {
		        $vendorid = $id;
		        break;
		    }
		}
		
		
		$owner = $this->input->post('owner');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$detail = $this->input->post('detail');

		$data = array(
			'id_vendor' => $vendorid,
			'owner' => $owner,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'detail' => $detail,
		);

		$this->m_vendor->input_data($data,'vendor');
		redirect('vendor/index');
	}
	public function delete($id){
		$where = array('id_vendor' => $id);
		$this->m_vendor->delete_data($where, 'vendor');
		redirect('vendor/index');
	}
}