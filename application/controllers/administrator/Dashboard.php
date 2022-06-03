<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Admin Dashboard | SIAKAD SMKN 2';
		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('template_administrator/footer');
	}
}
