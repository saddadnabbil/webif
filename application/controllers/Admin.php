<?php


class Admin  extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function edit()
    {
        if($this->session->userdata('role_id') == 2) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }

        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('jurusan', 'Major', 'required|trim');
        $this->form_validation->set_rules('nohp', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Address', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Place & Date of Birth', 'required|trim');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('twitter', 'Twitter', 'required|trim');
        
        if ($this->form_validation->run() == false) {
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/edit', $data);
        $this->load->view('templates/footer');
        }  else {
            

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Edit profile is not change!</div>');
                    redirect('profile');
                }
            }

            $data = [
                'name' => $this->input->post('name', true),
                'nim'  => $this->input->post('nim', true),
                'nohp'  => $this->input->post('nohp', true),
                'alamat'  => $this->input->post('alamat', true),
                'tanggal_lahir'  => $this->input->post('tanggal_lahir', true),
                'jurusan'  => $this->input->post('jurusan', true),
                'instagram'  => $this->input->post('instagram', true),
                'twitter'  => $this->input->post('twitter', true),
            ];
            $email  = $this->input->post('email');

            $this->db->where('email', $email);
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin_profile');
        }
    }
    
    public function changePassword()
    {
        $data['judul'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if(!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('admin/changepassword');
            } else {
                if($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">"New password cannot be the same as current password!</div>');
                    redirect('admin/changepassword');
                } else {
                    $password_has = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_has);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('admin/changepassword');
                }
            }
        }
    }
    

}