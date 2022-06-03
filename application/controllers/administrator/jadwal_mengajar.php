<?php  

class Jadwal_mengajar extends CI_Controller{
   
   public function index()
   {
      
      $this->load->view('template_administrator/header');
      $this->load->view('template_administrator/navbar');
      $this->load->view('administrator/jadwal_mengajar/index');
      $this->load->view('template_administrator/footer');
   }

   public function create()
   {
      
      $this->load->view('template_administrator/header');
      $this->load->view('template_administrator/navbar');
      $this->load->view('administrator/jadwal_mengajar/create');
      $this->load->view('template_administrator/footer');
   }

   public function edit()
   {
      
      $this->load->view('template_administrator/header');
      $this->load->view('template_administrator/navbar');
      $this->load->view('administrator/jadwal_mengajar/edit');
      $this->load->view('template_administrator/footer');
   }
}