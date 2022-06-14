<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Siswa Dashboard | SIAKAD SMKN 2';
		// $data['user'] = $this->db->get_where('user', ['email' =>
		// $this->session->userdata('email')])->row_array();

		$this->load->view('templates/murid_header', $data);
		$this->load->view('templates/murid_navbar');
		$this->load->view('siswa/index');
		$this->load->view('templates/murid_footer');
	}
    
}

?>