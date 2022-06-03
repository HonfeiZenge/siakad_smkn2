<?php  

class Jurusan extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/jurusan');
		$this->load->view('template_administrator/footer');
	}

	public function tambah_jurusan()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jurusan_form');
		$this->load->view('template_administrator/footer');
	}


}