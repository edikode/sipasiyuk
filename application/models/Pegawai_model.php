<?php

class Pegawai_model extends CI_Model {
    
    public function __construct(){
       
        $this->table = 'pegawai';
        parent::__construct();
    }

    function getAll()
    {
        $this->db->select('pegawai.id, nip, nama, jabatan');
        $this->db->join('jabatan', 'jabatan.id = pegawai.jabatan_id');        
        
        $query = $this->db->get($this->table);
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
