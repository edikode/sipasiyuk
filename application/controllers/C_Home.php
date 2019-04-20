<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('M_user');
        $this->data["title"] = "Sipasi Yuk!!";
        date_default_timezone_set("Asia/Jakarta"); 
        $this->dateToday = date("Y-m-d H:i:s");

        if ($this->session->userdata('status') =="login") { 
            if ($this->session->userdata('level') =="admin") {
                redirect(base_url().'dashboard');
            }else if($this->session->userdata('level') =="pimpinan") {
                redirect(base_url().'dashboard');
            }
        }
        
    }

    public function index(){     
        // $this->data['title'] = "Login Sipasi Yuk!!";       
        // $this->load->view("login/login", $this->data); 

        $this->data['title'] = "Dashboard Sipasi";
        $this->data['sidebar']=$this->load->view("Sidebar", $this->data, true);
        $this->data['content']=$this->load->view("Dashboard", $this->data, true);
        $this->load->view("UserTemplate", $this->data);
    }

}