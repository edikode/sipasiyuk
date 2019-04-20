<?php

class User_model extends CI_Model {
    
    public function __construct(){
       
        $this->table = 'users';
        $this->table2 = 'pegawai';
        $this->tablero = 'roles';
        $this->tablej = 'jabatan';
        parent::__construct();

        // if ($this->session->userdata('status') != "login") {
        //     redirect(base_url());
        // }
    }

    function getAll()
    {
        $this->db->select('users.id, username, password, date_created, is_active, role, jabatan, nip, nama');
        //query join
        $this->db->join('roles', 'roles.id = users.role_id');
        $this->db->join('pegawai', 'pegawai.id = users.pegawai_id');
        $this->db->join('jabatan', 'jabatan.id = pegawai.jabatan_id');

        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_AllRoles(){
        $query = $this->db->get($this->tablero);
        return $query->result();
    }

    function get_AllJab(){
        $query = $this->db->get($this->tablej);
        return $query->result();
    }

    function get_AllPeg(){
        $query = $this->db->get($this->table2);
        return $query->result();
    }
    

   function get_data($id)
    {
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

    function insert($data){
        $this->db->insert($this->table, $data);
    }

    function insert1($data1, $table){
        $this->db->insert($this->table, $data1);
    }

    function insert2($data2, $table2){
        $this->db->insert($this->table2, $data2);
        $last_id = $this->db->insert_id();
		return $last_id;
    }

    function update($data, $id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
