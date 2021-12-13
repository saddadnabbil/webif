<?php


class Home extends CI_Controller {
    public function index()
    {
        
        $data['judul'] = 'WEBIF';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    // public function home()
    // {
    //     $data['judul'] = 'WEBIF';
    //     $this->load->view('home/home', $data);
    // }

} 

