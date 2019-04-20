<?php

class Jabatan extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Jabatan_model');
    }

	public function index()
	{
        $data['judul'] = "Jabatan";
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['no'] = "" ;
            
       $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == false) {            
            $data['_view'] = 'admin/user/jabatan/index';
            $this->load->view('templates/index',$data);
    
        }else {
            $this->db->insert('jabatan', ['jabatan'=> $this->input->post('jabatan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jabatan ditambahkan!</div>');
            redirect('admin/jabatan');
        }
    }


    public function edit($id)
    {      

        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim|is_unique[jabatan.jabatan]', [
            'is_unique' => 'Jabatan sudah ada!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['data']   = $this->Jabatan_model->get_data($id);
            $data['_view']  = 'admin/jabatan/index';
        }else{
            $id     = $this->input->post('id');
            $data  = [
                'jabatan'   => $this->input->post('jabatan'),
                'role_id'   => $this->input->post('role_id'),
            ];               
            $this->Jabatan_model->update($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Berhasil diubah</div>');
            redirect('admin/jabatan');
        }
        
        
    }

    public function update(){
        $id     = $this->input->post('id');
        $data   = array(
            'username'      =>$this->input->post('username'),
            'password'      =>$this->input->post('password'),
            'date_created'  =>$this->input->post('date_created'),
            'is_active'     =>$this->input->post('is_active'),
            'role_id'       =>$this->input->post('role_id')
              
        );
        $this->User_model->update($data, $id);
        redirect('admin/user');
    }

    public function delete($id)
    {
        $this->Jabatan_model->delete($id);
        redirect('admin/jabatan');
    }
}