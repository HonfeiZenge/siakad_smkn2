<?php  

class Mata_pelajaran extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin | Mata Pelajaran | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/mata_pelajaran');
		$this->load->view('template_administrator/footer');
	}


	public function tambah_mata_pelajaran()
	{
		$data['judul'] = 'Admin | Create Mata Pelajaran | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/mata_pelajaran_form');
		$this->load->view('template_administrator/footer');
	}

}