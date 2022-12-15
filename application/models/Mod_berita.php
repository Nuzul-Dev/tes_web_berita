<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_berita extends CI_Model
{

    private $tabel       = 'berita';
    private $column_order  = array(null,'kategori.kategori', 'berita.judul_berita', null);
    private $order         = array('berita.created_at' => 'DESC');


    private function _get_data()
    {

        $mencari = $this->input->post('cari');

        if ($mencari != null || $mencari != '') {

            $this->db->like('berita.judul_berita', $mencari);
        } 

        $this->db->select('berita.berita_id,berita.judul_berita, berita.isi_berita');
        $this->db->select('kategori.kategori_id, kategori.kategori');
        $this->db->join('kategori','kategori.kategori_id = berita.kategori_id','left');
        $this->db->from($this->tabel);


        if (isset($_POST['order'])) {

            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);

        } else if (isset($this->order)) {

            $order = $this->order;

            $this->db->order_by(key($order), $order[key($order)]);

        }

    }

    public function get_data()
    {
        $this->_get_data();

        if ($_POST['length'] != -1) {

            $this->db->limit($_POST['length'], $_POST['start']);

        }
        $query = $this->db->get();

        return $query->result();
    }

    public function count_filtered()
    {

        $this->_get_data();

        $query = $this->db->get();

        return $query->num_rows();

    }

    public function count_all()
    {

        $this->db->from($this->tabel);

        return $this->db->count_all_results();

    }


}
/* End of file Mod_berita.php */
/* Location: ./application/models/Mod_berita.php */