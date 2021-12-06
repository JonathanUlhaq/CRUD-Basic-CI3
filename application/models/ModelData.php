<?php

class ModelData extends CI_Model
{
    public function munculData()
    {
        return $this->db->get('belajar')->result_array();
    }

    public function masukData($data)
    {
        $this->db->insert('belajar', $data);
    }

    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('belajar');
    }

    public function detail($id)
    {
        return $this->db->get_where('belajar', $id)->row_array();
    }

    public function ubah($where, $data)
    {
        $this->db->where($where);
        $this->db->update('belajar', $data);
    }
}
