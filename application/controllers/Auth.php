<?php

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
           
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        }else{
            //validasi sukses
            $this->_login();
        }
       
    }


    private function _login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $users = $this->db->get_where('users', ['username' => $username])->row_array();
        
        //jika usernya ada
        if ($users) {
            //jika usernya aktif
            if ($users['is_active'] == 1) {
               //cek password
               if (password_verify($password, $users['password'])) {
                   $data = [
                       'username'   => $users['username'],
                       'role_id'    => $users['role_id'],
                       'status' => 'login'
                   ];
                   $this->session->set_userdata($data);
                   if ($users['role_id'] == 1) 
                   {
                       redirect('Dashboard');
                   } elseif($users['role_id'] == 2) 
                   {
                       redirect('direktur/disposisi');
                   } elseif ($users['role_id'] == 3) 
                   {
                    redirect('wadir/disposisi');
                   }else{
                       redirect('pimpinan/disposisi');
                   }
                   
               }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah! :( </div>');
                redirect('auth');
               }
           
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username Belum Aktif! :( </div>');
                redirect('auth');
            }

        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username Belum Terdaftar! :( </div>');
            redirect('auth');
        }
    }
    

    public function regis()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Login!!';
            $this->load->view(login);
        } else {
           $data = [
               'username'   => htmlspecialchars($this->input->post('name', true)),
               'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
               'role_id'    => 3,
               'is_active'  =>1,
               'date_created'   =>time()
           ];

           //menambahkan data 
           $this->db->insert('users', $data);
           $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation!!!!!</div>');
           redirect('auth');
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu Logout -_-!</div>');
        redirect('auth');
    }
}
?>