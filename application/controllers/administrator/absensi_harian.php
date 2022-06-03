<?php  

class Absensi_harian extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/absensi_harian');
		$this->load->view('template_administrator/footer');
	}

}