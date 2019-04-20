<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('M_user');  
        $this->isLogin();
    }

    public function index()
    {
        $this->data['title'] = "Dashboard Sipasi";
        $this->data['sidebar']=$this->load->view("Sidebar", $this->data, true);
        $this->data['content']=$this->load->view("Dashboard", $this->data, true);
        $this->load->view("UserTemplate", $this->global, NULL, NULL);       
    }


    // public function dashboard(){
    //     $level=($this->session->userdata('level'));
    //     if($level=='admin'){
    //         $id_user=($this->session->userdata('nip_nik'));
    //         $this->data['myProfil']=$this->M_login->admin($id_user)->result();    
    //     }else($level=='pimpinan'){
    //         $id_user=($this->session->userdata('nip_nik'));
    //         $this->data['myProfil']=$this->M_login->pimpinan($id_user)->result();    
    //     }
        
    //     $this->data['title'] = "Dashboard Sipasi";
    //     $this->data['sidebar']=$this->load->view("Sidebar", $this->data, true);
    //     $this->data['content']=$this->load->view("Dashboard", $this->data, true);
    //     $this->load->view("UserTemplate", $this->data); 
    // }   
}