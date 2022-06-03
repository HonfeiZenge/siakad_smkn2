<?php  

class Jurusan extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin Jurusan | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/jurusan');
		$this->load->view('template_administrator/footer');
	}

	public function tambah_jurusan()
	{
		$data['judul'] = 'Admin Create Jurusan | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jurusan_form');
		$this->load->view('template_administrator/footer');
	}


}