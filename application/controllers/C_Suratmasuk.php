<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Suratmasuk extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('M_suratmasuk');  
        $this->load->helper('url');
    }

    public function index()
    {
        $jumlah_data = $this->M_suratmasuk->jumlah_data();

        $this->load->library('pagination');
        $config['base_url'] = base_url().'suratmasuk/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;

        // class pagination bootstrap 4 
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Selanjutnya';
		$config['prev_link']        = 'Sebelumnya';
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

        $from = $this->uri->segment(3);

        $this->pagination->initialize($config);
       
        $data['data']=$this->M_suratmasuk->tampil_data($config['per_page'], $from);
        $data['no'] = $from;
        
        $this->data['title'] = "Surat Masuk";
        $this->data['sidebar']=$this->load->view("Sidebar", $this->data, true);
        $this->data['content']=$this->load->view("suratmasuk/index", $this->data, true);
        $this->load->view("UserTemplate", $this->data);

            
        
    }




}