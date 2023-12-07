<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $level = $this->session->userdata('level');
        if ($level !== 'Admin' && $level !== 'Kontributor') {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = array(
            'judul_halaman' => 'Dashboard'
        );
        $this->template->load('template_admin', 'admin/dashboard', $data);
    }
}
