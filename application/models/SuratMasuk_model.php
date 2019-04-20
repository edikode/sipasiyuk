<?php

class SuratMasuk_model extends CI_model {

    public function __construct(){
       
        $this->table = 'suratmasuk';
        $this->tablesj = 'jenis_dispo';
        parent::__construct();
    }

    public function getAll()
    {
        $this->db->select('suratmasuk.id, no_surat, tgl_terima, pengirim, perihal, tgl_surat, lampiran, status, nama_jenis, dispo_direktur_id, dispo_wadir');
        $this->db->join('jenis_dispo', 'jenis_dispo.id = suratmasuk.jenis_id');

        $query = $this->db->get($this->table);
        return $query->result();
    }

    function getall_Jenis(){
        $query = $this->db->get($this->tablesj);
        return $query->result();
    }

    public function countAll()
    {
        $query = $this->db->get("suratmasuk");
        return $query->num_rows();
    }

    public function get_data($id)
    {
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);

    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);

    }

    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }


}