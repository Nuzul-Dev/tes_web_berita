<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
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
            'judul'             => 'Data Pengguna',
        );
        $this->libberita->admin('master/pengguna/vindexpengguna', $data);

    }

     public function listData()
    {

        $lier = $this->mod_user->get_data();

        $data = array();

        $no = $_POST['start'];

        $no1 = 1;

        foreach ($lier as $list) {

            if($this->session->admin->user_id != $list->user_id ){


            $button = '<div class="btn-group">';

            $button .= '<button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">Aksi</button>';

            $button .= '<span class="sr-only">Klik</span>';

            $button .= '</button>';

            $button .= '<ul class="dropdown-menu" role="menu">';


                 $button .= '<li><a onclick="return confirm(' . "'Apakah Anda Yakin?'" . ')" href="' . site_url('admin/master/pengguna/hapus/' . $list->user_id) . '">Hapus</a></li>';

                 $button .= '<li><a href="' . site_url('admin/master/pengguna/edit/' . $list->user_id) . '">Edit</a></li>';


            $button .= '</ul>';

            $button .= '</div>';

            }else{
                $button = '<a class="btn btn-primary btn-flat">tidak ada aksi</a>';
            }


            $row = array();

            $row[] = $no1++ . ".";

            $row[] = $list->username;

            $row[] = $button;

            $data[] = $row;

        }

        $output = array(

            "draw"            => $_POST['draw'],

            "recordsTotal"    => $this->mod_user->count_all(),

            "recordsFiltered" => $this->mod_user->count_filtered(),

            "data"            => $data,

        );

        echo json_encode($output);

    }

    public function tambah()
    {
        $data = array(
            'title'     => 'Aplikasi Tes Web Berita',
            'judul'     => 'Tambah Data Pengguna',
        );

        $this->libberita->admin('master/pengguna/vindextambahpengguna', $data);
    }

    public function simpan()
    {
        $data = array(
            'username'  => $this->input->post('username'),
            'password'  => md5($this->input->post('password') ),
        );

        $this->db->set('user_id','UUID()', FALSE);

        $query = $this->db->insert('user', $data);

        if ($query) {
            $this->session->set_flashdata('berhasil', 'Berhasil Manambah Data Pengguna..');
            redirect(base_url('admin/master/pengguna'));
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Manambah Data Pengguna..');
            redirect(base_url('admin/master/pengguna'));
        }

    }

    public function hapus($user_id)
    {
        $query = $this->db->delete('user', array('user_id' => $user_id));

        if ($query) {
            $this->session->set_flashdata('berhasil', 'Berhasil Menghapus pengguna..');
            redirect(base_url('admin/master/pengguna'));
        } else {
            $this->session->set_flashdata('gagal', 'Gagal Menghapus pengguna..');
            redirect(base_url('admin/master/pengguna'));
        }
    }

    public function edit($user_id = null)
    {
        if ($this->input->post('username') != '') {

            $data = array(
                'username'    => $this->input->post('username'),
            );

            $query = $this->db->update('user', $data, array('user_id' => $user_id));

            if ($query) {

                $this->session->set_flashdata('berhasil', 'Berhasil Mengubah pengguna..');
                redirect(base_url('admin/master/pengguna'));

            } else {
                $this->session->set_flashdata('gagal', 'Gagal Mengubah pengguna..');
                redirect(base_url('admin/master/pengguna'));
            }

        } else {

            $data = array(
                'title'     => 'Edit Data Pengguna',
                'judul'     => 'Edit Data Pengguna',
                'user_id'   => $user_id,
                'pengguna'  => $this->db->get_where('user', array('user_id' => $user_id) )->row(),
            );

            $this->libberita->admin('master/pengguna/veditdatapengguna', $data);
        }

    }


}