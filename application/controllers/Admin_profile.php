<?php


class Admin_profile extends CI_Controller 
{
    public function index()
    {
        $data['judul'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }

        if($this->session->userdata('role_id') == 2) {
            redirect('auth/blocked');
            }

        $this->load->view('templates/admin_profile_header', $data);
        $this->load->view('admin/admin_profile/index', $data);
        $this->load->view('templates/footer');
    }
}