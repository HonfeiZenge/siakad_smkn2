<?php  

class Kelas extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/create');
		$this->load->view('template_administrator/footer');
	}

	public function edit()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/edit');
		$this->load->view('template_administrator/footer');
	}
}