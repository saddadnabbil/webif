<?php 


class Pagination extends CI_Controller {

    public function index()
    {
        $this->load->model('Pagination_model', 'mahasiswa');
        
        $data['judul'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->mahasiswa->getMahasiswa(10, 0);

        // Pagination
        $this->load->library('pagination');

        // contig
        $config['base_url'] = 'http://localhost/alpro-project/pagination/index';
        $config['total_rows'] = $this->mahasiswa->countAllMahasiswa();

        var_dump($config['total_rows']); die;
    }


}


