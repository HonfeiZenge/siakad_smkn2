<?php  

class Jadwal_pelajaran extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin Jadwal Pelajaran | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$data['judul'] = 'Admin Create Jadwal Pelajaran| SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/create');
		$this->load->view('template_administrator/footer');
	}

	public function edit()
	{
		$data['judul'] = 'Admin Edit Jadwal Pelajara | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/edit');
		$this->load->view('template_administrator/footer');
	}
}