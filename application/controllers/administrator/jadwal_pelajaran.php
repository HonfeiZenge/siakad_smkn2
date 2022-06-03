<?php  

class Jadwal_pelajaran extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/create');
		$this->load->view('template_administrator/footer');
	}

	public function edit()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/edit');
		$this->load->view('template_administrator/footer');
	}
}