<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('M_login');
    }

	public function index(){

		$this->isLogin();
	}

	function isLogin(){
		$isLogin = $this->session->userdata('isLogin');

		if (!isset($isLogin) || $isLogin != TRUE) {
			$this->load->view('login/login');
		} else {
			redirect('/dashboard');
		}
	}

	public function loginMe(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|maxlength[128]|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|maxlength[32]|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$result = $this->M_login->loginMe($email, $password);

			if (count($result) > 0) {

				foreach ($result as $res) {
					$sessionArray = array(
						'id_users' 	=> $res->id_users,
						'roles'		=> $res->id_role,
						'roles'		=> $res->role,
						'username'	=>$res->username, 
						'isLogin' =>TRUE
					);

					$this->session->set_userdata($sessionArray);

					redirect('dashboard');
				}

			} else {
				$this->session->set_flashdata('error', 'Email or password mismatch');

				redirect('login');
			}
		}
	}

	function logout() {
		$this->session->sess_destroy ();
		
		redirect ( 'login/login' );
	}
    
}