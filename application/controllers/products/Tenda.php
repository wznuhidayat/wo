<?php 

class Tenda extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_tenda");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tenda"] = $this->m_tenda->getAll();
        $this->template->load('template','product/tenda/tenda_view',$data);
    }


    public function add()
    {
        $tenda = $this->m_tenda;
        $validation = $this->form_validation;
        $validation->set_rules($tenda->rules());

        if ($validation->run()) {
            $tenda->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('products/tenda');
        }

        $this->template->load('template','product/tenda/add_tenda');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('products/tenda');
       
        $tenda = $this->m_tenda;
        $validation = $this->form_validation;
        $validation->set_rules($tenda->rules());

        if ($validation->run()) {
            $tenda->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('products/tenda');
        }

        $data["tenda"] = $tenda->getById($id);
        if (!$data["tenda"]) show_404();
        
        $this->template->load('template','product/tenda/edit_tenda',$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_tenda->delete($id)) {
            redirect(site_url('products/tenda'));
        }
    }
}