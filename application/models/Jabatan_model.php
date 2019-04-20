<?php

class Jabatan_model extends CI_Model {
    
    public function __construct(){
       
        $this->table = 'jabatan';
        parent::__construct();
    }

    function getAll()
    {
        $this->db->select('jabatan.id, jabatan');
        
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
