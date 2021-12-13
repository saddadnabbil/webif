<?php


class About extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'WEBIF';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        
    }

} 

