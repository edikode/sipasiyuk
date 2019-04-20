<?php

class SuratMasuk extends CI_Controller {

    public  function __construct()
    {
        parent::__construct();

        is_logged_in();
        $this->load->model('SuratMasuk_model');
    }


    public function index()
	{
        $data['judul'] = "Surat Masuk";
        $data['suratmasuk'] = $this->SuratMasuk_model->getAll();
        $data['no'] = "" ;
        
        $data['_view'] = 'admin/suratmasuk/index';
        $this->load->view('templates/index',$data);
    }

    public function tambah()
    {
        $data['judul'] = "Surat Masuk";
        $data['suratmasuk'] = $this->SuratMasuk_model->getAll();$data['jenis_dispo']  = $this->SuratMasuk_model->getall_Jenis();

        $this->form_validation->set_rules('no_surat', 'Nomor Surat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = 'admin/suratmasuk/tambah';
            $this->load->view('templates/index',$data);
        }
        else
        {
            $data = array(
                'no_surat'  =>$this->input->post('no_surat'),
                'tgl_terima'  =>$this->input->post('tgl_terima'),
                'pengirim'  =>$this->input->post('pengirim'),
                'perihal'  =>$this->input->post('perihal'),
                'tgl_surat'    =>$this->input->post('tgl_surat'),
                'lampiran'  =>$this->input->post('lampiran'),
                'status' => "baru",
                'jenis_id'  =>$this->input->post('jenis_id')                
            );
            $this->SuratMasuk_model->insert($data);
            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('admin/suratmasuk');
        }
        
        
    }

    public function edit($id)
    {
        $data['jenis_dispo']  = $this->SuratMasuk_model->getall_Jenis();
        $data['data']   = $this->SuratMasuk_model->get_data($id);
        $data['judul']  = "Surat Masuk";
        

        $this->form_validation->set_rules('no_surat', 'Nomor Surat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = 'admin/suratmasuk/edit';
            $this->load->view('templates/index', $data);
        }
        else
        {
            $id     = $this->input->post('id');
            $data   = array(
                    'no_surat'  =>$this->input->post('no_surat'),
                    'tgl_terima'  =>$this->input->post('tgl_terima'),
                    'pengirim'  =>$this->input->post('pengirim'),
                    'perihal'  =>$this->input->post('perihal'),
                    'tgl_surat'    =>$this->input->post('tgl_surat'),
                    'lampiran'  =>$this->input->post('lampiran'),
                    'jenis_id'  =>$this->input->post('jenis_id')                
            );
            $this->SuratMasuk_model->update($data, $id);
            $this->session->set_flashdata('flash',"Diubah");
            redirect('admin/suratmasuk');
        }
    }

    public function detail()
    {
        $data['judul'] = "Surat Masuk";
        // $data['disposisi'] = $this->Disposisi_model->getAll();

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = 'admin/suratmasuk/detail';
            $this->load->view('templates/index',$data);
        }
    
    }

    public function delete($id)
    {
        $this->SuratMasuk_model->delete($id);
        redirect('admin/suratmasuk');
    }





}