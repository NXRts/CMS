<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Caraousel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        // Kategori
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Caraousel',
            'caraousel'      => $caraousel,
        );
        $this->template->load('template_admin', 'admin/caraousel_index', $data);
    }

    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path']          = 'assets/upload/caraousel/';
        $config['max_size']             = 500 * 1024;
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto terlalu besar, Upload ulang foto kurang dari 500kb.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>',);
            redirect('admin/caraousel');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        // model
        $data = array(
            'judul'             => $this->input->post('judul'),
            'foto'              => $namafoto,
        );
        $this->db->insert('caraousel', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert  alert-primary alert-dismissible fade show" role="alert">
            <strong>Data caraousel Berhasil Ditambahkan</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ', '<br>');
        redirect('admin/caraousel');
    }

    public function delete_data($id)
    {
        $filename = FCPATH . '/assets/upload/caraousel/' . $id;
        if (file_exists($filename)) {
            unlink(".assets/upload/caraousel/" . $id);
        }
        $where = array(
            'foto'   => $id
        );
        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            <strong>Data caraousel Berhasil Dihapus </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ', '<br>');
        redirect('admin/caraousel');
    }

    public function update()
    {
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size']             = 500 * 1024;
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ukuran foto terlalu besar, Upload ulang foto kurang dari 500kb.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>',);
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }

        // model
        $data = array(
            'judul'             => $this->input->post('judul'),
            'id_kategori'       => $this->input->post('id_kategori'),
            'keterangan'        => $this->input->post('keterangan'),
            'slug'              => str_replace(' ', '-', $this->input->post('judul')),
        );
        $where = array(
            'foto' => $this->input->post('nama_foto')
        );
        $this->db->update('konten', $data, $where);
        $this->session->set_flashdata('alert', '
        <div class="alert  alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Konten Berhasil Diperbarui</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ', '<br>');
        redirect('admin/caraousel');
    }
}
