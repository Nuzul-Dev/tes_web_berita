<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if (($this->session->admin)) {
			redirect(base_url('admin/dashboard'));
		}
	}
	
	public function index()
	{
		$data = array(
			'title' => 'Aplikasi Tes Web Berita'
		);
		
		$this->libberita->page('login',$data);
	}

}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */