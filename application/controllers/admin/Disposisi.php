<?php

class Disposisi extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();

        is_logged_in();

        $this->load->model('Disposisi_model');
    }

	public function index()
	{
        $data['judul'] = "Disposisi";
        $data['disposisi'] = $this->Disposisi_model->getAll();
        
        $data['_view'] = 'admin/disposisi/index';
        $this->load->view('templates/index',$data);
    }

    public function detail()
    {
        $data['judul'] = "Disposisi";
        // $data['disposisi'] = $this->Disposisi_model->getAll();
        
        $data['_view'] = 'admin/disposisi/detail';
        $this->load->view('templates/index',$data);
    }
    
    public function tambah()
    {
        $data['judul'] = "Disposisi";
        $data['disposisi'] = $this->Disposisi_model->getAll();
        

        $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = 'admin/disposisi/tambah';
            $this->load->view('templates/index',$data);
        }
        else
        {
            $this->Disposisi_model->insert();
            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('admin/disposisi');
        }
        
        
    }

    public function edit()
    {
        $data['judul'] = "Disposisi";
        // $data['disposisi'] = $this->Disposisi_model->getAll();
        
        $data['_view'] = 'admin/disposisi/edit';
        $this->load->view('templates/index',$data);
    }

    public function hapus($id)
    {
       
    }

    public function dataAjax(){
        $data['barang'] = $this->Barang_model->searchAjax();
        $this->load->view('barang/dataAjax',$data);
    }

    public function pagination()
    {
        $this->load->library("pagination");
        $config = array();
        $config['base_url'] = "#";
        $config['total_rows'] = $this->Barang_model->countAll();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        
        // style css
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $start = ($page - 1) * $config['per_page'];

        $data = array(
            'pagination_link'   => $this->pagination->create_links(),
            'barang'            => $this->Barang_model->getPagination($config['per_page'], $start),
        );

        $this->load->view('barang/dataAjax',$data);

    }
}
