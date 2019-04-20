<?php

class User extends CI_Controller {

    public  function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');

        date_default_timezone_set("Asia/Jakarta"); 
        $this->dateToday = date("Y-m-d H:i:s");

        if ($this->session->userdata('status') !="login") { 
            redirect(base_url());
         }
    }

	public function index()
	{
        $data['judul'] = "User";
        $data['user'] = $this->User_model->getAll();
        $data['pegawai']  = $this->User_model->get_AllPeg();
        $data['no'] = "" ;
        
        $data['_view'] = 'admin/user/index';
        $this->load->view('templates/index',$data);
        // $this->load->view('templates/sidebar',$data);
    }

    public function add()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
            'is_unique' => 'Username sudah ada!'
        ]);
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[pegawai.nip]', [
            'is_unique' => 'NIP sudah ada!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' =>'Password terlalu pendek!'  
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul']  = "User";
            $data['_view']  = 'admin/user/tambah';
            $data['roles']  = $this->User_model->get_AllRoles();
            $data['jabatan']  = $this->User_model->get_AllJab();
            $this->load->view('templates/index', $data);
        } else {
            $data2  = [
                'nip'   => htmlspecialchars($this->input->post('nip', true)),
                'nama'   => htmlspecialchars($this->input->post('nama', true)),
                'jabatan_id'    => $this->input->post('jabatan_id')
            ];
            $idpegawai = $this->User_model->insert2($data2,'pegawai');

            $data1 = [
                'pegawai_id'   => $idpegawai,
                'username'   => htmlspecialchars($this->input->post('username', true)),
                'password'   => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id'    => $this->input->post('role_id'),
                'is_active'  =>$this->input->post('is_active'),
                'date_created'   =>date("Y-m-d H:i:s"),
            ];
            $this->User_model->insert1($data1, 'users');

           

            // $this->User_model->insert2($data2, 'pegawai');
            
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Berhasil ditambahkan</div>');
            redirect('admin/user');
        }
        
        
    }

    
    public function edit($id)
    {        
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[users.username]', [
            'is_unique' => 'Username sudah ada!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' =>'Password terlalu pendek!'  
        ]);

        if ($this->form_validation->run() == false) {
            $data['roles']  = $this->User_model->get_AllRoles();
            $data['data']   = $this->User_model->get_data($id);
            $data['judul']  = "User";
            $data['_view']  = 'admin/user/edit';
            $this->load->view('templates/index', $data);
        }else{
            $id     = $this->input->post('id');
            $data   = [
                'username'      =>htmlspecialchars($this->input->post('username', true)),
                'password'      =>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_created'  =>date("Y-m-d H:i:s"),
                'is_active'     =>$this->input->post('is_active'),
                'role_id'       =>$this->input->post('role_id')
                  
            ];
            $this->User_model->update($data, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Berhasil ditambahkan</div>');
            redirect('admin/user');
        }
        
        
    }

    public function update(){
        $id     = $this->input->post('id');
        $data   = array(
            'username'      =>$this->input->post('username'),
            'password'      =>$this->input->post('password'),
            'date_created'  =>$this->input->post('date_created'),
            'is_active'     =>$this->input->post('is_active'),
            'role_id'       =>$this->input->post('role_id')
              
        );
        $this->User_model->update($data, $id);
        redirect('admin/user');
    }

    public function delete($id)
    {
        $this->User_model->delete($id);
        redirect('admin/user');
    }


    

}