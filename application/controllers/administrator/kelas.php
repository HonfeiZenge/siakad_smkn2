<?php  

class Kelas extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin | Kelas | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$data['judul'] = 'Admin | Create Kelas | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/create');
		$this->load->view('template_administrator/footer');
	}

	public function edit()
	{
		$data['judul'] = 'Admin | Edit Kelas | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/edit');
		$this->load->view('template_administrator/footer');
	}
}