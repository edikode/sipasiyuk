<?php

class Disposisi extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        // $this->load->model('Disposisi_model');
        $this->load->model('Dispo_model'); 
        $this->load->model('User_model');
        $this->load->model('SuratMasuk_model');

        date_default_timezone_set("Asia/Jakarta"); 
        $this->dateToday = date("Y-m-d H:i:s");

    }

	public function index()
	{
        $data['judul'] = "Surat Disposisi";
        $data['suratmasuk'] = $this->SuratMasuk_model->getAll();
        // $querySurat = "SELECT `suratmasuk`.*, `dispo_direktur`.`wadir_id` from                      `suratmasuk` join `dispo_direktur` where                                        `suratmasuk`.`dispo_direktur_id` = `dispo_direktur`.`id`";
        // $data['suratmasuk'] = $this->db->query($querySurat)->result();
        // $data['disposisi'] = $this->Disposisi_model->getAll();
        $data['no'] = "" ;
        
        $data['_view'] = 'direktur/disposisi/index2';
        $this->load->view('templates/index',$data);
    }

    public function detail($id)
	{
        $data['judul'] = "Detail Surat Disposisi";
        // $data['disposisi'] = $this->Disposisi_model->get($id);
        
        $data['_view'] = 'direktur/disposisi/detail';
        $this->load->view('templates/index',$data);
    }

    public function tambah($id)
    {
        // $query = "SELECT * FROM `jabatan` where `jabatan` like '%wadir%'";
        // var_dump($this->session->userdata('role_id')); die;
        $query = "SELECT * FROM `jabatan` where `role_id` = 3";
        $data['jabatan'] = $this->db->query($query)->result();
        $data['jenis_dispo']  = $this->SuratMasuk_model->getall_Jenis();
        $data['data']   = $this->SuratMasuk_model->get_data($id);
        $data['user'] = $this->User_model->getAll();
        $data['judul'] = "Tambah Disposisi";
        $data['_view'] = 'direktur/disposisi/tambah';
        $this->load->view('templates/index',$data);
    }

    public function edit()
    {
        $data['judul'] = "Disposisi";
        // $data['disposisi'] = $this->Disposisi_model->getAll();
        
        $data['_view'] = 'direktur/disposisi/edit';
        $this->load->view('templates/index',$data);
    }

    public function konfirmasi()
    {
        $this->form_validation->set_rules('tujuan', 'Tujuan Surat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Surat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('direktur/disposisi');
        }
        else
        {
            // insert ke tabel konfirm_direktur
            $data_insert = [
                "tanggal" => $this->input->post('tanggal', true),
                "isi" => $this->input->post('isi', true),
            ];
            $this->db->insert('konfirm_direktur', $data_insert);

            // update ke tabel disposisi
            $data_update = [
                "status" => "1",
                "keterangan" => "sampai ke direktur",
                "konfirm_direktur_id" => $this->db->insert_id(),
            ];

            $this->db->where('id', $this->input->post('id_disposisi', true));
            $this->db->update('disposisi', $data_update);

            $this->session->set_flashdata('flash',"Diubah");
            redirect('direktur/disposisi');
        }   
    }
    

    public function dispo_direktur($id)
    {
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('direktur/disposisi/tambah/'.$id);
        }
        else
        {
            $data_insert = [
                "wadir_id" => $this->input->post('tujuan', true),
                "isi" => $this->input->post('isi', true),
                "tgl_kirim" => date("Y-m-d H:i:s"),
                "status" => "disposisi dr Direktur"
            ];
            $this->db->insert('dispo_direktur', $data_insert);

            // update ke tabel disposisi
            $data_update = [
                "status" => "disposisi dr Direktur",
                "dispo_direktur_id" => $this->db->insert_id(),
            ];

            $this->db->where('id', $this->input->post('id_suratmasuk', true));
            $this->db->update('suratmasuk', $data_update);

            $this->session->set_flashdata('flash',"Diubah");
            redirect('direktur/disposisi');
        }   
    }
}
