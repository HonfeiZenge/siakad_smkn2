<?php  

class Wali_kelas extends CI_Controller{
	
	public function index()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/wali_kelas');
		$this->load->view('template_administrator/footer');
	}

}