<?php

class Disposisi_model extends CI_model {

    public function getAll()
    {
        // return $this->db->get('disposisi')->result();
    }

    public function countAll()
    {
        $query = $this->db->get("disposisi");
        return $query->num_rows();
    }
     function get_data($id)
    {
        $query = $this->db->get_where($this->table, array('id'=>$id));
        return $query->row();
    }

    public function getPagination($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('disposisi');
        $this->db->order_by("kode", "ASC");
        $this->db->limit($limit,$start);
        $query = $this->db->get();

        return $query->result();
    }

    public function get($id)
    {
        return $this->db->get_where('disposisi', ['id' => $id])->row();
    }

    public function search()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kode', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('satuan', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get('disposisi')->result();
    }

    public function searchAjax()
    {
        $keyword = $this->input->get('keyword', true);
        $this->db->like('kode', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('satuan', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get('disposisi')->result();
    }

    public function insert()
    {
        $data = [
            "nomor_surat" => $this->input->post('nomor_surat', true),
            "asal" => $this->input->post('asal', true),
            "tanggal" => $this->input->post('tanggal', true),
            "perihal" => $this->input->post('perihal', true),
        ];
        $this->db->insert('disposisi', $data);
    }

    public function update()
    {
        $data = [
            "kode" => $this->input->post('kode', true),
            "nama" => $this->input->post('nama', true),
            "satuan" => $this->input->post('satuan', true),
            "harga" => $this->input->post('harga', true),
        ];
        $this->db->where('kode', $this->input->post('kode', true));
        $this->db->update('disposisi', $data);
    }

    public function delete($id)
    {
        $this->db->delete('disposisi', ['kode' => $id]);
    }
}