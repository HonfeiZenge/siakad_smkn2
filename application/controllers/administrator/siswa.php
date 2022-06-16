<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Siswa extends CI_Controller{
	public function index()
	{	
		$data['judul'] = 'Admin | Siswa | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/siswa/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$data['judul'] = 'Admin | Create Siswa | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/siswa/create');
		$this->load->view('template_administrator/footer');
	}
}