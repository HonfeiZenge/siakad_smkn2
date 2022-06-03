<?php  

class Wali_kelas extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin | Wali Kelas | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/wali_kelas');
		$this->load->view('template_administrator/footer');
	}

}