<?php
 if (!defined('BASEPATH'))
 	exit('No direct script access allowed');

class M_suratmasuk extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->table = 'suratmasuk';
    }

    function tampil_data($number = NULL, $offset = NULL){
        $query = $this->db->get($this->table, $number, $offset);

        return $query->result();
    }

    function jumlah_data(){
        $query = $this->db->get($this->table);

        return $query->num_rows();
    }

    function input_data($data){
        $this->db->insert($this->table, $data);
    }

    function spesifik_data($id){
        //fungsi sama dengan 'select * from tb_buku
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

    function update_data($data, $id_suratmasuk){
        $this->db->where('id', $id_suratmasuk);
        $this->db->update($this->table, $data);
    }

    function hapus_data($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

}