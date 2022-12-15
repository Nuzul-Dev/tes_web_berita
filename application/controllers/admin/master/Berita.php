<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (is_null($this->session->admin)) {
            $this->session->set_flashdata('gagal', 'Maaf anda harus login dahulu..');
            redirect(site_url());
        }
        $this->load->model('mod_berita');
    }

    public function index()
    {

        $data = array(
            'title'             => 'Aplikasi Tes Web Berita',
            'judul'             => 'Data Berita',
        );
        $this->libberita->admin('master/berita/vindexberita', $data);

    }

     public function listData()
    {

        $lier = $this->mod_berita->get_data();

        $data = array();

        $no = $_POST['start'];

        $no1 = 1;

        foreach ($lier as $list) {

            $button = '<div class="btn-group">';

            $button .= '<button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">Aksi</button>';

            $button .= '<span class="sr-only">Klik</span>';

            $button .= '</button>';

            $button .= '<ul class="dropdown-menu" role="menu">';

            $button .= '<li><a onclick="return confirm(' . "'Apakah Anda Yakin?'" . ')" href="' . site_url('admin/master/berita/hapus/' . $list->berita_id) . '">Hapus</a></li>';

            $button .= '<li><a href="' . site_url('admin/master/berita/edit/' . $list->berita_id) . '">Edit</a></li>';

            $button .= '</ul>';

            $button .= '</div>';

            $row = array();

            $row[] = $no1++ . ".";

            $row[] = $list->kategori;

            $row[] = $list->judul_berita;

            $row[] = $list->isi_berita;

            $row[] = $button;

            $data[] = $row;

        }

        $output = array(

            "draw"            => $_POST['draw'],

            "recordsTotal"    => $this->mod_berita->count_all(),

            "recordsFiltered" => $this->mod_berita->count_filtered(),

            "data"            => $data,

        );

        echo json_encode($output);

    }

    public function tambah()
    {
        $data = array(
            'title'     => 'Aplikasi Tes Web Berita',
            'judul'     => 'Tambah Data Berita',
            'kategori'  => $this->db->get('kategori'),
        );

        $this->libberita->admin('master/berita/vindextambahberita', $data);
    }

    public function simpan()
    {
        $data = array(
            'kategori_id'   => $this->input->post('kategori_id'),
            'judul_berita'  => $this->input->post('judul_berita'),
            'isi_berita'    => $this->input->post('isi_berita'),
            'created_at'    => date('y-m-d h:i:s')
        );

        $this->db->set('berita_id','UUID()', FALSE);

        $query = $this->db->insert('berita', $data);

        if ($query) {
            $this->session->set_flashdata('berhasil', 'Berhasil Manambah Kategori..');
            redirect(base_url('admin/master/berita'));
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Manambah Kategori..');
            redirect(base_url('admin/master/berita'));
        }

    }

    public function hapus($berita_id = null)
    {
        $query = $this->db->delete('berita', array('berita_id' => $berita_id));

        if ($query) {
            $this->session->set_flashdata('berhasil', 'Berhasil Menghapus berita..');
            redirect(base_url('admin/master/berita'));
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Menghapus berita..');
            redirect(base_url('admin/master/berita'));
        }
    }

    public function edit($berita_id = null)
    {
        if ($this->input->post('judul_berita') != '') {

            $data = array(
                'judul_berita'    => $this->input->post('judul_berita'),
                'kategori_id'     => $this->input->post('kategori_id'),
                'isi_berita'      => $this->input->post('isi_berita'),
            );

            $query = $this->db->update('berita', $data, array('berita_id' => $berita_id));

            if ($query) {

                $this->session->set_flashdata('berhasil', 'Berhasil Mengubah berita..');
                redirect(base_url('admin/master/berita'));

            } else {
                $this->session->set_flashdata('gagal', 'Gagal Mengubah berita..');
                redirect(base_url('admin/master/berita'));
            }

        } else {

            $data = array(
                'title'     => 'Edit Data Berita',
                'judul'     => 'Edit Data Berita',
                'berita_id'     => $berita_id,
                'kategori'      => $this->db->get('kategori'),
            );
            // $this->db->join('kategori','kategori.kategori_id = berita.berita_id','left');
            $data['berita']  = $this->db->get_where('berita', array('berita_id' => $berita_id) )->row();

            $this->libberita->admin('master/berita/veditdataberita', $data);
        }

    }


}