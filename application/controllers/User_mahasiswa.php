<?php 


class User_mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {

        if($this->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }

        $data['judul'] = 'Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    


        // Pagination

        // load library
        $this->load->library('pagination');

        // Config
        $config['base_url'] = 'https://webif.selfloveid.xyz/user_mahasiswa/index';
        $config['total_rows'] = $this->Mahasiswa_model->countAllMahasiswa();
        $config['per_page'] = 10;
        $config['num_links'] = 1;
        
        // styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" style="background-color: #F6B459; border-color: #F6B459;" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        
        $config['attributes'] = array(
            'class' => 'page-link',
            'style' => 'color: #F6B459'
        );
        

        // // Initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['user'] = $this->Mahasiswa_model->getMahasiswa($config['per_page'], $data['start']);
        if( $this->input->post('keyword') ) {
            $data['user'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }
        
        $coba['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Data Mahasiswa';
           
        $this->load->view('templates/user_header', $coba, $data);
           $this->load->view('user_mahasiswa/index', $data, $coba);
           $this->load->view('templates/footer');


        
    }

    public function tambah() 
    {
        if($this->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }

        $data['judul'] = 'Form Add Data Mahasiswa';
        
        $this->form_validation->set_rules('nama', 'Name', 'required\trim');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|trim');
        $this->form_validation->set_rules('jurusan', 'Major', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('user_mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Added');
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        if($this->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }

        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        if($this->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }

        $coba['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $coba['judul'] = 'Detail Data Mahasiswa';
        $data['user'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/user_profile_header', $coba, $data);
        $this->load->view('user_mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if($this->session->userdata('role_id') == 2) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }


        $data['judul'] = 'Edit Profile';
        $data['user'] = $this->Mahasiswa_model->getMahasiswaById($id);
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
        $this->load->view('user_mahasiswa/edit', $data);
        $this->load->view('templates/footer');
        }  else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
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
                    redirect('user_profile');
                }
            }

            $this->Mahasiswa_model->editDataMahasiswa();
            $this->session->set_flashdata('flash', 'Edited');
            redirect('user_mahasiswa/detail/');
        }
    }
}
