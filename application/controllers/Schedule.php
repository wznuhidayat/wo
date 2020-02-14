<?php 

class Schedule extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model(['m_schedule','m_user']);
        $this->load->library('form_validation');
    }
	public function index(){
        
		$this->template->load('template','schedule/schedule_view');
	}
    public function load(){
        $data_event = $this->m_schedule->getAll();
        $query_user = $this->m_user->get();

        $data       = array();
        foreach($data_event->result_array() as $row)
        {
           $data[] = array(
            'id' => $row['kode_schedule'],
            'title' => $row['name'],
            'start' => $row['start_event'],
            'end' => $row['end_event']
           );
          }

        echo json_encode($data);
    }

	public function add(){
		$schedule = $this->m_schedule;
        $validation = $this->form_validation;
        $query_user = $this->m_user->get();
        $validation->set_rules($schedule->rules());
        if ($validation->run()) {
            $schedule->save();
            $this->session->set_flashdata('success', 'Data Successfully Added');
            redirect('schedule');
        }
        $user[null] = '- Select -';
        foreach ($query_user->result() as $usr) {
             $user[$usr->email] = $usr->email;
        }
        $data['user'] = $user; 
        $data['selected'] = null;
		$this->template->load('template','schedule/add_event',$data);
	}
    public function getOne(){
        if($this->input->post('id'))
        {
            $get_data = $this->m_schedule->getById($this->input->post('id'));
            $data       = array();
            foreach($data_event->result_array() as $row)
            {
               $data[] = array(
                'id' => $row['kode_schedule'],
                'title' => $row['name'],
                'email' => $row['email'],
                'start' => $row['start_event'],
                'end' => $row['end_event'],
                'detail' => $row['detail']
               );
            }
            echo json_encode($data);
        }
        
    }
}

?>