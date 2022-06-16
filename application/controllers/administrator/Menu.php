<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

    public function index()
    {
        $data['judul'] = 'Menu Management | SIAKAD SMKN 2';
        $data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/menu/index', $data);
		$this->load->view('template_administrator/footer');
    }

}
?>