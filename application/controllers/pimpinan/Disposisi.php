<?php

class Disposisi extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        // $this->load->model('Disposisi_model');
    }

	public function index()
	{
        $data['judul'] = "Surat Disposisi";
        // $data['disposisi'] = $this->Disposisi_model->getAll();
        
        $data['_view'] = 'pimpinan/disposisi/index';
        $this->load->view('templates/index',$data);
    }

}