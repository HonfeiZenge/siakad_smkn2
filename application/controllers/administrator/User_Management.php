<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Management extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

  public function index() {
    $data['judul'] = 'Admin | User Management | SIAKAD SMKN 2';
    $data['user'] = $this->user_management_model->tampil_data();

    $this->load->view('template_administrator/header', $data);
    $this->load->view('template_administrator/navbar');
    $this->load->view('administrator/user_management/index', $data);
    $this->load->view('template_administrator/footer');
  }

}

?>
