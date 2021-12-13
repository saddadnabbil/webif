<?php

class Informasi_model extends CI_Model {
    public function getAllInformasi()
    {
        return $query = $this->db->get('informasi')->result_array();
    }

    public function tambahDataInformasi()
    {
        $data = [
            'matkul' => $this->input->post('matkul', true),
            'judul'  => $this->input->post('judul', true),
            'deadline'  => $this->input->post('deadline', true),
            'deskripsi'  => $this->input->post('deskripsi', true),
            'date_created'  => time()
        ];

        $this->db->insert('informasi', $data);
    }

    public function hapusDataInformasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('informasi');
    }

    public function getInformasiById($id)
    {
        return $this->db->get_where('informasi', ['id' => $id])->row_array();
    
    }

    public function editDataInformasi()
    {
        $data = [
            'matkul' => $this->input->post('matkul', true),
            'judul'  => $this->input->post('judul', true),
            'deadline'  => $this->input->post('deadline', true),
            'deskripsi'  => $this->input->post('deskripsi', true)
        ];
        

        $id = $this->input->post('id', true);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('informasi', $data);
    }

    

    public function cariDataInformasi()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('matkul', $keyword);
        $this->db->or_like('judul', $keyword);
        $this->db->or_like('deadline', $keyword);
        return $this->db->get('informasi')->result_array();
        
    }

    public function getInformasi($limit, $start)
    {
        return $this->db->get('informasi', $limit, $start)->result_array();
        
    }

    public function countAllInformasi()
    {
        return $this->db->get('informasi')->num_rows();
    }
}