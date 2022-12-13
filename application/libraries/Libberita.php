<?php

/**
 *  Create By Nuzul
 */
class Libberita
{

    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function page($content, $data = null)
    {
        return $this->ci->load->view($content, $data);
    }

    public function admin($content, $data = null)
    {
        $datas = array(
            'header'  => $this->ci->load->view('admin/header', $data, true),
            'sidebar' => $this->ci->load->view('admin/sidebar', $data, true),
            'footer'  => $this->ci->load->view('admin/footer', $data, true),
            'content' => $this->ci->load->view('admin/' . $content, $data, true),
        );
        return $this->ci->load->view('admin/page', $datas);
    }

    public function TanggalIndo($date)
    {
        if ($date == null) {
            $date = date('Y-m-d');
        }
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);

        $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
        return ($result);
    }

}
