<?php  

class Jadwal_pelajaran extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin | Jadwal Pelajaran | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$this->rules();
		if($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Admin | Create Jadwal Pelajaran| SIAKAD SMKN 2';
			$data['guru'] = $this->guru_model->tampil_data();
			$data['kelas'] = $this->jadwal_pelajaran_model->tampil_data_kelas();
			$data['mata_pelajaran'] = $this->jadwal_pelajaran_model->tampil_data_pelajaran();
			$data['tahun_ajaran'] = $this->jadwal_pelajaran_model->tampil_data_tahun_ajaran();

			$this->load->view('template_administrator/header', $data);
			$this->load->view('template_administrator/navbar');
			$this->load->view('administrator/jadwal_pelajaran/create', $data);
			$this->load->view('template_administrator/footer');
		} else {
			$this->jadwal_pelajaran_model->input_data();
		}
	}

	public function edit()
	{
		$data['judul'] = 'Admin | Edit Jadwal Pelajara | SIAKAD SMKN 2';
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/jadwal_pelajaran/edit');
		$this->load->view('template_administrator/footer');
	}

	private function rules() {
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
	}
}