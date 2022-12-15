<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (is_null($this->session->admin)) {
            $this->session->set_flashdata('gagal', 'Maaf anda harus login dahulu..');
            redirect(site_url());
        }
        $this->load->model('mod_user');
    }

    public function index()
    {

        $data = array(
            'title'             => 'Aplikasi Tes Web Berita',
            'judul_content'     => 'Halaman Utama',
            'total_pengguna'    => $this->db->count_all_results('user'),
            'total_kategori'    => $this->db->count_all_results('kategori'),
            'total_berita'      => $this->db->count_all_results('berita'),
        );
        $this->libberita->admin('dashboard', $data);

    }


}