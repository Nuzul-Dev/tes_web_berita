<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod_kategori extends CI_Model
{

    private $tabel       = 'kategori';
    private $column_order  = array(null, 'kategori', null);
    private $order         = array('kategori_id' => 'DESC');


    private function _get_data()
    {

        $mencari = $this->input->post('cari');

        if ($mencari != null || $mencari != '') {

            $this->db->like('kategori', $mencari);
        } 

        
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
/* End of file Mod_kategori.php */
/* Location: ./application/models/Mod_kategori.php */