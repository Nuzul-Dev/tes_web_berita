<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if (($this->session->admin)) {
			redirect(base_url('admin/dashboard'));
		}
			$this->load->model('mod_user');
	}
	
	public function index()
	{
		$data = array(
			'title' => 'Aplikasi Tes Web Berita'
		);
		
		$this->libberita->page('login',$data);
	}

	public function ceklog()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data_user = $this->mod_user->masukLog($username, $password);

		if ($data_user->num_rows() == FALSE) {
			$cek_username = $this->mod_user->masukLog($username);
			if ($cek_username->num_rows() == TRUE) {
				echo var_dump($cek_username->num_rows());
				$this->session->set_flashdata('gagal', 'Katasandi Salah..');
				redirect(site_url());
			}else{
				$this->session->set_flashdata('gagal', 'Pengguna tidak ditemukan..');
				redirect(site_url());
			}
		}else{

			$data_login = $data_user->row();
			$this->session->set_userdata('admin', $data_user->row());
			redirect(site_url('admin/dashboard'));
		}
	}

}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */