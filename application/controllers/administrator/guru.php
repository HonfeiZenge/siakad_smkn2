<?php  

class Guru extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin Data Guru | SIAKAD SMKN 2';
		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$data['judul'] = 'Admin Create Data Guru | SIAKAD SMKN 2';
		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/create');
		$this->load->view('template_administrator/footer');
	}

	public function edit()
	{
		$data['judul'] = 'Admin Edit Data Guru | SIAKAD SMKN 2';
		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/edit');
		$this->load->view('template_administrator/footer');
	}

}