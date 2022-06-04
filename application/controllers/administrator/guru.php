<?php  

class Guru extends CI_Controller{
	
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	// Use this code if not listed on autoload
	// 	//$this->load->model('admministrator/Guru_model');
	// }

	public function index()
	{
		$data['judul'] = 'Admin Data Guru | SIAKAD SMKN 2';
		$data['guru'] = $this->Guru_model->tampil_data();
		$this->load->view('template_administrator/header', $data);
		$this->load->view('template_administrator/navbar');
		$this->load->view('administrator/guru/index', $data);
		$this->load->view('template_administrator/footer');
	}

	public function create()
	{
		$data['judul'] = 'Admin Create Data Guru | SIAKAD SMKN 2';
		$this->rules();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template_administrator/header', $data);
			$this->load->view('template_administrator/navbar');
			$this->load->view('administrator/guru/create');
			$this->load->view('template_administrator/footer');
		} else {
			$nim = $this->input->post('nip');
			$nuptk = $this->input->post('nuptk');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$alamat = $this->input->post('alamat');
			$telepon = $this->input->post('telepon');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$agama = $this->input->post('agama');
			$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
			$foto = $_FILES['foto'];

			if ($foto == '') {
				// return $this->session->set_flashdata('message', 'Foto Belum Terisi');
			} else {
				$config['upload_path'] = FCPATH.'uploads/foto_guru/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size'] = 1024;
	
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					echo "Gagal Upload"; die();
				} else {
					$foto = $this->upload->data('file_name');
				}
			}
	
			$data = array(
				'nip' => $nim,
				'nuptk' => $nuptk,
				'nama_lengkap' => $nama_lengkap,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin'	=> $jenis_kelamin,
				'agama'	=> $agama,
				'alamat' => $alamat,
				'telepon' => $telepon,
				'pendidikan_terakhir' => $pendidikan_terakhir,
				"foto" => $foto
			);

			$this->Guru_model->input_data($data);
			$this->session->set_flashdata('message', 'Berhasil Menyimpan Data');
			redirect('administrator/guru');
		}
	}

	public function edit($id)
	{
		$this->rules();

		$data['judul'] = 'Admin | Edit Data Guru | SIAKAD SMKN 2';
		$data['guru'] = $this->Guru_model->edit($id);
		$data['agama'] = ['Islam', 'Protestan', 'Katholik', 'Hindu', 'Buddha', 'Konghucu'];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template_administrator/header', $data);
			$this->load->view('template_administrator/navbar');
			$this->load->view('administrator/guru/edit', $data);
			$this->load->view('template_administrator/footer');
		} else {
			$this->Guru_model->update();
			$this->session->set_flashdata('message', 'Berhasil Update Data');
			redirect('administrator/guru');
		}
	}

	public function delete($id) {
		$data = $this->Guru_model->edit($id);
		$this->Guru_model->delete($id, $data['foto']);
		$this->session->set_flashdata('message', 'Berhasil Edit Data');
		redirect('administrator/guru');
	}

	private function rules() {
		$this->form_validation->set_rules('nip', 'NIP', 'required|min_length[10]');
		$this->form_validation->set_rules('nuptk', 'NUPTK', 'required');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Guru', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telepon', 'Telpon', 'required');
		$this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required');
	}

}