<?php

class Pegawai extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();

        is_logged_in();
        $this->load->model('Pegawai_model');
        $this->load->model('Jabatan_model');
    }

	public function index()
	{
        $data['judul'] = "Pegawai";
        $data['pegawai'] = $this->Pegawai_model->getAll();
        $data['no'] = "" ;
        
        $data['_view'] = 'admin/user/pegawai/index';
        $this->load->view('templates/index',$data);
    }

    public function tambah()
    {
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['judul']  = "Pegawai";
        $data['_view']  = 'admin/user/pegawai/tambah';
        $this->load->view('templates/index', $data);

    }

    public function simpan()
    {
        $data = array(
            'nip'         =>$this->input->post('nip'),
            'nama'        =>$this->input->post('nama'),
            'jabatan_id'  =>$this->input->post('jabatan_id')
        );
        $this->Pegawai_model->insert($data);
        redirect('admin/pegawai');
    }

    public function edit($id)
    {        
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['data']   = $this->Pegawai_model->get_data($id);
        $data['judul']  = "Pegawai";
        $data['_view']  = 'admin/user/pegawai/edit';
        $this->load->view('templates/index', $data);
    }

    public function update(){
        $id     = $this->input->post('id');
        $data   = array(
            'nip'  =>$this->input->post('nip'),
            'nama'  =>$this->input->post('nama'),
            'jabatan_id'  =>$this->input->post('jabatan_id')  
        );
        $this->Pegawai_model->update($data, $id);
        redirect('admin/pegawai');
    }

    public function delete($id)
    {
        $this->Pegawai_model->delete($id);
        redirect('admin/pegawai');
    }
}