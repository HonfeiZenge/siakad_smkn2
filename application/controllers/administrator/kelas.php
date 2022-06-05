<?php  

class Kelas extends CI_Controller{
	
	public function index()
	{
		$data['judul'] = 'Admin | Kelas | SIAKAD SMKN 2';
		$data['kelas'] = $this->kelas_model->tampil_data();
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/index');
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$data['judul'] = 'Admin | Create Kelas | SIAKAD SMKN 2';
		$data['guru'] = $this->guru_model->tampil_data();
		$data['kompetensi_keahlian'] = $this->kompetensi_keahlian_model->tampil_data();
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/create', $data);
		$this->load->view('template_administrator/footer');
	}

	public function store() {
		$this->rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = [
				"jenjang_kelas" => $this->input->post('jenjang_kelas'),
				"id_kompetensi_keahlian" => $this->input->post('kompetensi_keahlian'),
				"index_kelas" => $this->input->post('index_kelas'),
				"id_guru" => $this->input->post('id_guru'),
				"jumlah_murid" => $this->input->post('jumlah_murid')
			];

			$this->kelas_model->input_data($data);
			$this->session->set_flashdata('message', 'Berhasil Menyimpan Data');
			redirect('administrator/kelas');
		}
	}

	public function update($id)
	{
		$data['judul'] = 'Admin | Edit Kelas | SIAKAD SMKN 2';
		$data['kelas'] = $this->kelas_model->edit($id);
		$data['guru'] = $this->guru_model->tampil_data();
		$data['kompetensi_keahlian'] = $this->kompetensi_keahlian_model->tampil_data();
		$data['jenjang_kelas'] = ['X', 'XI', 'XII'];
		
      	$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/kelas/edit', $data);
		$this->load->view('template_administrator/footer');
	}

	public function update_data() {
		$id = $this->input->post('id');
		$data['judul'] = 'Admin | Edit Kelas | SIAKAD SMKN 2';
		$data['kelas'] = $this->kelas_model->edit($id);
		$data['guru'] = $this->guru_model->tampil_data();
		$data['kompetensi_keahlian'] = $this->kompetensi_keahlian_model->tampil_data();
		$data['jenjang_kelas'] = ['X', 'XI', 'XII'];
		$this->rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template_administrator/header', $data);
			$this->load->view('template_administrator/navbar');
			$this->load->view('administrator/kelas/edit', $data);
			$this->load->view('template_administrator/footer');
		} else {
			$data = [
				"jenjang_kelas" => $this->input->post('jenjang_kelas'),
				"id_kompetensi_keahlian" => $this->input->post('kompetensi_keahlian'),
				"index_kelas" => $this->input->post('index_kelas'),
				"id_guru" => $this->input->post('id_guru'),
				"jumlah_murid" => $this->input->post('jumlah_murid')
			];

			$this->kelas_model->update($data);
			$this->session->set_flashdata('message', 'Berhasil Mengubah Data');
			redirect('administrator/kelas');
		}
	}

	public function delete($id) {
		$this->kelas_model->delete($id);
		$this->session->set_flashdata('message', 'Berhasil Edit Data');
		redirect('administrator/kelas');
	}

	private function rules() {
		$this->form_validation->set_rules('jenjang_kelas', 'Jenjang Kelas', 'required');
		$this->form_validation->set_rules('kompetensi_keahlian', 'Kompetensi Keahlian', 'required');
		$this->form_validation->set_rules('index_kelas', 'Index Kelas', 'required');
		$this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
		$this->form_validation->set_rules('jumlah_murid', 'Jumlah Murid', 'required');
	}
}