<?php  

class Tahun_ajaran extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/tahun_ajaran');
		$this->load->view('template_administrator/footer');
	}

	public function tambah_tahun_ajaran()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/tahun_ajaran_form');
		$this->load->view('template_administrator/footer');
	}

}