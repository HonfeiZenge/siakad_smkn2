<?php  

class Laporan_nilai_siswa extends CI_Controller{
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/Laporan_nilai_siswa');
		$this->load->view('template_administrator/footer');
	}

}