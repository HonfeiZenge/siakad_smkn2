<?php  

class Absensi_harian extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin Absensi Harian | SIAKAD SMKN 2';
		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/absensi_harian');
		$this->load->view('template_administrator/footer');
	}

}