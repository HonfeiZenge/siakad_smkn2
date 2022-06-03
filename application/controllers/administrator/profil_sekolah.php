<?php
class Profil_Sekolah extends CI_Controller {
	
	public function index()
	{
		$data['judul'] = 'Admin | Profil Sekolah | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/profil_sekolah');
		$this->load->view('template_administrator/footer');
	}

	public function create_profil_sekolah()
	{
		$data['judul'] = 'Admin | Create Profil Sekolah | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/create_profil_sekolah');
		$this->load->view('template_administrator/footer');
	}

}
?>