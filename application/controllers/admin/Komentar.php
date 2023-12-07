<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_komen');
    }

    public function simpan_keluhan()
    {
        $komentar = $this->input->post('komentar');
        $this->Keluhan_model->insert_keluhan($komentar);
        redirect('detail');
    }

    public function daftar_keluhan()
    {
        $data['keluhan'] = $this->db->get('keluhan')->result();
        $this->load->view('daftar_keluhan', $data);
    }
}
