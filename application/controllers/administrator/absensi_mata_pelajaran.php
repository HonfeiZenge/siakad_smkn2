<?php  

class Absensi_mata_pelajaran extends CI_Controller{
  
  public function index()
  {
    $data['judul'] = 'Admin Absensi Mapel | SIAKAD SMKN 2';
		$this->load->view('template_administrator/header', $data);
    $this->load->view('template_administrator/navbar');
    $this->load->view('administrator/absensi_mata_pelajaran');
    $this->load->view('template_administrator/footer');
  }

}