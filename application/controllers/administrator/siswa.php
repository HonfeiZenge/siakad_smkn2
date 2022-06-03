<?php  

class Siswa extends CI_Controller{
	
	public function index()
	{	
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/siswa/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/siswa/create');
		$this->load->view('template_administrator/footer');
	}
}