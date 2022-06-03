<?php  

class Guru extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/create');
		$this->load->view('template_administrator/footer');
	}

	public function edit()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/edit');
		$this->load->view('template_administrator/footer');
	}

}