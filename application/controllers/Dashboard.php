<?php

class Dashboard extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('Disposisi_model');
    }

	public function index()
	{
        $data['judul'] = "Dashboard";

        $data['_view'] = 'admin/dashboard';
        $this->load->view('templates/index',$data);
    }
}

?>