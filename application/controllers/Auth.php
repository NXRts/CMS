<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('login');
    }
    
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
    
        // Periksa apakah username dan password tidak kosong
        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username dan Password harus diisi.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    
        $this->db->from('user');
        $this->db->where('username', $username);
        $cek = $this->db->get()->row();
    
        // Periksa apakah username ditemukan
        if ($cek == NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username Tidak Ada</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        } else if ($password == $cek->password) {
            // Redirect ke halaman utama jika login berhasil
            $data = array(
                'id_user'   => $cek->id_user,
                'nama'      => $cek->nama,
                'username'  => $cek->username,
                'level'     => $cek->level,
            );
        
            // Simpan data ke session
            $this->session->set_userdata($data);
        
            redirect('admin/home');
        } else {
            // Jika password salah
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Password salah.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('auth');
        }
    }

    // logout
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
