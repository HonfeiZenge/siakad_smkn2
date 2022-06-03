<?php  

class Jadwal_mengajar extends CI_Controller{
   
   public function index()
   {
      $data['judul'] = 'Admin Jadwal Mengajar | SIAKAD SMKN 2';
      $this->load->view('template_administrator/header', $data);
      $this->load->view('template_administrator/navbar');
      $this->load->view('administrator/jadwal_mengajar/index');
      $this->load->view('template_administrator/footer');
   }

   public function create()
   {
      $data['judul'] = 'Admin Create Jadwal Mengajar | SIAKAD SMKN 2';
      $this->load->view('template_administrator/header', $data);
      $this->load->view('template_administrator/navbar');
      $this->load->view('administrator/jadwal_mengajar/create');
      $this->load->view('template_administrator/footer');
   }

   public function edit()
   {
      $data['judul'] = 'Admin Edit Jadwal Mengajar | SIAKAD SMKN 2';
      $this->load->view('template_administrator/header', $data);
      $this->load->view('template_administrator/navbar');
      $this->load->view('administrator/jadwal_mengajar/edit');
      $this->load->view('template_administrator/footer');
   }
}