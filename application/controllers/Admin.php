<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('admin/auth/login', $data);
        } else {
            $this->_login();
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]', [
            'required' => 'Username wajib diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[admin.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[4]|matches[password2]', [
            'required' => 'Password wajib diisi',
            'matches' => 'Password tidak sama',
            'min_length' => 'Password Minimal 4'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi Admin';
            $this->load->view('admin/auth/register', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama'), true),
                'username' => htmlspecialchars($this->input->post('username'), true),
                'email' => htmlspecialchars($this->input->post('email'), true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'foto' => 'default.jpg',
                'no_hp' => 0,
                'no_ktp' => 0,
                'foto_ktp' => 0,
                'role_id' => '2',
                'is_active' => '1',
                'date_created' => time()

            ];
            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat siahkan login!</div>');
            redirect('admin');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    $this->dashboard();
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password tidak cocok!</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Cek email anda untuk aktifasi akun!</div>');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password tidak cocok!</div>');
            redirect('admin');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Anda telah Logout</div>');
        redirect('admin');
    }

    public function dashboard()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        // echo 'Welcome ' . $data['admin']['nama'];
        $this->load->view('admin/index', $data);
    }

    public function pegawai()
    {
        $data['admin'] = $this->db->get_where('admin', ['username' =>
        $this->session->userdata('username')])->row_array();

        // echo 'Welcome ' . $data['admin']['nama'];
        $this->load->view('admin/pegawai', $data);
    }
}
