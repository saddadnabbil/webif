<?php

class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa()
    {
        $this->db->order_by('nama', 'ASC');
        $query = $this->db->get('karyawan');
        return $query->result();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            'name' => $this->input->post('nama', true),
            'nim'  => $this->input->post('nim', true),
            'jurusan'  => $this->input->post('jurusan', true),
            'email'  => $this->input->post('email', true)
        ];

        $this->db->insert('user', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    
    }

    public function editDataMahasiswa()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'nim'  => $this->input->post('nim', true),
            'nohp'  => $this->input->post('nohp', true),
            'alamat'  => $this->input->post('alamat', true),
            'tanggal_lahir'  => $this->input->post('tanggal_lahir', true),
            'jurusan'  => $this->input->post('jurusan', true),
        ];
        

        $id = $this->input->post('id', true);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('user')->result_array();
        
    }

    public function getMahasiswa($limit, $start)
    {
        return $this->db->get('user', $limit, $start)->result_array();
        
    }

    public function countAllMahasiswa()
    {
        return $this->db->get('user')->num_rows();
    }
}