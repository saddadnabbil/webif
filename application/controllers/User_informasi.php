<?php 

class User_informasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
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
        // Pagination
        
        // load library
        $this->load->library('pagination');
        
        // Config
        $config['base_url'] = 'https://webif.selfloveid.xyz/user_informasi/index';
        $config['total_rows'] = $this->Informasi_model->countAllInformasi();
        $config['per_page'] = 10;
        $config['num_links'] =2;
        
        // styling
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center" >';
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
        $data['informasi'] = $this->Informasi_model->getInformasi($config['per_page'], $data['start']);
        if( $this->input->post('keyword') ) {
            $data['informasi'] = $this->Informasi_model->cariDataInformasi();
        }
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $coba['informasi'] = $this->db->get_where('informasi')->result_array();

        $data['judul'] = 'Informasi';
           
        $this->load->view('templates/user_detail_informasi_header', $data, $coba);
        $this->load->view('user_informasi/index', $data);
        $this->load->view('templates/footer');

        
    }

    public function tambah() 
    {
        $data['judul'] = 'Tambah Informasi';
        
        $this->form_validation->set_rules('matkul', 'Subject', 'required|trim');
        $this->form_validation->set_rules('judul', 'Ttile', 'required|trim');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');

        $data['informasi'] = $this->db->get_where('informasi')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
           
        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/user_detail_informasi_header', $data, $data);
            $this->load->view('user_informasi/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Informasi_model->tambahDataInformasi();
            $this->session->set_flashdata('flash', 'Added');
            redirect('user_informasi');
        }
        
        
        if($this->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
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

        $this->Informasi_model->hapusDataInformasi($id);
        $this->session->set_flashdata('flash', 'Deleted');
        redirect('user_informasi');
    }

    public function detail($id)
    {
        
        $data['judul'] = 'Detail Informasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['informasi'] = $this->Informasi_model->getInformasiById($id);
           
            $this->load->view('templates/user_detail_informasi_header', $data);
           $this->load->view('user_informasi/detail', $data);
           $this->load->view('templates/footer');
        
           
        if($this->session->userdata('role_id') == 1) {
        redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }
    }


    public function edit($id)
    {
        if($this->session->userdata('role_id') == 1) {
            redirect('auth/blocked');
        }
        
        if(!$this->session->userdata('email')) {
            redirect('auth');
        }


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Informasi';
        $data['informasi'] = $this->Informasi_model->getInformasiById($id);

        $this->form_validation->set_rules('matkul', 'Subject', 'required|trim');
        $this->form_validation->set_rules('judul', 'Title', 'required|trim');
        $this->form_validation->set_rules('deadline', 'Deadline', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/user_detail_informasi_header', $data);
        $this->load->view('user_informasi/edit', $data);
        $this->load->view('templates/footer');
        }  else {

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
    
            $this->Informasi_model->editDataInformasi();
            $this->session->set_flashdata('flash', 'Edited');
            redirect('user_informasi');

            
        }
    }


}