<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data['judul'] = 'Login Page | SIAKAD SMKN 2';
        $this->load->view('template_administrator/header', $data);
        $this->load->view('login');
        $this->load->view('template_administrator/footer');
    }

}

?>