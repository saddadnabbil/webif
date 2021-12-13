<?php

class Pagination_model extends CI_model {
    public function getAllMahasiswa()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function getMahasiswa($limit, $start)
    {
        return $this->db->get('mahasiswa', $limit, $start)->result_array();
    }

    public function countAllMahasiswa() 
    {
        return $this->db->get('mahasiswa')->num_rows();
    }
}