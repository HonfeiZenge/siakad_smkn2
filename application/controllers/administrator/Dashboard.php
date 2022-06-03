<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/navbar');
		// $this->load->view('template_administrator/sidebar');
		$this->load->view('template_administrator/footer');
	}
}
