<?php 

class M_schedule extends CI_model{

	private $_table = 't_schedule';

	public $kode_schedule;
	public $name;
	public $email_user;
	public $address;
	public $start_event;
	public $end_event;
	public $detail;

	public function rules()
    {

        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
            
            ['field' => 'address',
            'label' => 'address',
            'rules' => 'required']
        ];
    }

	public function getAll()
    {
        return $this->db->get($this->_table);
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kode_dress" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_schedule = uniqid(10);
        $this->name = $post["name"];
        $this->email_user = $post["email"];
        $this->address = $post["address"];
        $this->start_event = $post["start"];
        $this->end_event = $post["end"];
        $this->detail = $post["detail"];
        $this->db->insert($this->_table, $this);
    }
}
