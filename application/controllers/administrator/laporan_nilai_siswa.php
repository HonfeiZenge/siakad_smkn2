<?php  

class Laporan_nilai_siswa extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin | Laporan Nilai Siswa | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/Laporan_nilai_siswa');
		$this->load->view('template_administrator/footer');
	}

}