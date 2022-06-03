<?php
class Profil_Sekolah extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/profil_sekolah');
		$this->load->view('template_administrator/footer');
	}

	public function create_profil_sekolah()
	{
		
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/master/create_profil_sekolah');
		$this->load->view('template_administrator/footer');
	}

}
?>