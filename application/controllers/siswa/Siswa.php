<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['judul'] = 'Siswa Dashboard | SIAKAD SMKN 2';

		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('siswa/index');
		$this->load->view('template_administrator/footer');
	}

}

?>
