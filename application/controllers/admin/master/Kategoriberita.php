<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategoriberita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (is_null($this->session->admin)) {
            $this->session->set_flashdata('gagal', 'Maaf anda harus login dahulu..');
            redirect(site_url());
        }
        $this->load->model('mod_kategori');
    }

    public function index()
    {

        $data = array(
            'title'             => 'Aplikasi Tes Web Berita',
            'judul'             => 'Data Kategori Berita',
        );
        $this->libberita->admin('master/berita/vindexkategoriberita', $data);

    }

     public function listData()
    {

        $lier = $this->mod_kategori->get_data();

        $data = array();

        $no = $_POST['start'];

        $no1 = 1;

        foreach ($lier as $list) {

            $button = '<div class="btn-group">';

            $button .= '<button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">Aksi</button>';

            $button .= '<span class="sr-only">Klik</span>';

            $button .= '</button>';

            $button .= '<ul class="dropdown-menu" role="menu">';

            $button .= '<li><a onclick="return confirm(' . "'Apakah Anda Yakin?'" . ')" href="' . site_url('admin/master/kategoriberita/hapus/' . $list->kategori_id) . '">Hapus</a></li>';

            $button .= '<li><a href="' . site_url('admin/master/kategoriberita/edit/' . $list->kategori_id) . '">Edit</a></li>';

            $button .= '</ul>';

            $button .= '</div>';

            $row = array();

            $row[] = $no1++ . ".";

            $row[] = $list->kategori;

            $row[] = $button;

            $data[] = $row;

        }

        $output = array(

            "draw"            => $_POST['draw'],

            "recordsTotal"    => $this->mod_kategori->count_all(),

            "recordsFiltered" => $this->mod_kategori->count_filtered(),

            "data"            => $data,

        );

        echo json_encode($output);

    }

    public function tambah()
    {
        $data = array(
            'title'     => 'Aplikasi Tes Web Berita',
            'judul'     => 'Tambah Data Kategori Berita',
        );

        $this->libberita->admin('master/berita/vindextambahkategoriberita', $data);
    }

    public function simpan()
    {
        $data = array(
            'kategori'  => $this->input->post('kategori'),
        );

        $this->db->set('kategori_id','UUID()', FALSE);

        $query = $this->db->insert('kategori', $data);

        if ($query) {
            $this->session->set_flashdata('berhasil', 'Berhasil Manambah Kategori..');
            redirect(base_url('admin/master/kategoriberita'));
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Manambah Kategori..');
            redirect(base_url('admin/master/kategoriberita'));
        }

    }

    public function hapus($kategori_id)
    {
        $query = $this->db->delete('kategori', array('kategori_id' => $kategori_id));

        if ($query) {
            $this->session->set_flashdata('berhasil', 'Berhasil Menghapus kategori..');
            redirect(base_url('admin/master/kategoriberita'));
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Menghapus kategori..');
            redirect(base_url('admin/master/kategoriberita'));
        }
    }

    public function edit($kategori_id = null)
    {
        if ($this->input->post('kategori') != '') {

            $data = array(
                'kategori'    => $this->input->post('kategori'),
            );

            $query = $this->db->update('kategori', $data, array('kategori_id' => $kategori_id));

            if ($query) {

                $this->session->set_flashdata('berhasil', 'Berhasil Mengubah kategori..');
                redirect(base_url('admin/master/kategoriberita'));

            } else {
                $this->session->set_flashdata('gagal', 'Gagal Mengubah kategori..');
                redirect(base_url('admin/master/kategoriberita'));
            }

        } else {

            $data = array(
                'title'     => 'Edit Data Kategori Berita',
                'judul'     => 'Edit Data Kategori Berita',
                'kategori_id'   => $kategori_id,
                'kategori'      => $this->db->get_where('kategori', array('kategori_id' => $kategori_id) )->row(),
            );

            $this->libberita->admin('master/berita/veditdatakategoriberita', $data);
        }

    }


}