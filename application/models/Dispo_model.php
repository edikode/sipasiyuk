<?php

class Dispo_model extends CI_Model {
    
    public function __construct(){
       
        $this->table = 'suratmasuk';
        $this->tabler = 'dispo_direktur';
        parent::__construct();
    }

    function getAll()
    {
        return $this->db->get('suratmasuk')->result();
    }

    function get_AllRoles(){
        $query = $this->db->get($this->tablero);
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
