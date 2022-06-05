<?php

class Guru_model extends CI_Model {

    public function tampil_data() {
        return $this->db->get('guru')->result_array();
    }

    public function input_data($data) {
        $this->db->insert('guru', $data);
    }

    public function edit($id) {
        return $this->db->get_where('guru', ['id_guru' => $id])->row_array();
    }

    public function update($oldFile) {
        $id = $this->input->post('id');
		$foto = $_FILES['userfile']['name'];

        if ($foto) {
            $path = FCPATH.'uploads/foto_guru/'.$oldFile;
            unlink($path);
            $config['upload_path'] = FCPATH.'uploads/foto_guru/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = 1024;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $userfile= $this->upload->data('file_name');
                $this->db->set('foto',$userfile);
            } else {
                echo "Gagal Upload";
            }
        }
	
        $data = [
            "nip" => $this->input->post("nip"),
            "nuptk" => $this->input->post("nuptk"),
            "nama_lengkap" => $this->input->post("nama_guru"),
            "tempat_lahir" => $this->input->post("tempat_lahir"),
            "tanggal_lahir" => $this->input->post("tanggal_lahir"),
            "jenis_kelamin" => $this->input->post("jenis_kelamin"),
            "agama" => $this->input->post("agama"),
            "alamat" => $this->input->post("alamat"),
            "telepon" => $this->input->post("telepon"),
            "pendidikan_terakhir" => $this->input->post("pendidikan_terakhir"),
        ];

        $this->db->where('id_guru', $id);
        $this->db->update('guru', $data);
    }

    public function delete($id, $file) {
        $path = FCPATH.'uploads/foto_guru/'.$file;
        unlink($path);
        $this->db->where('id_guru', $id);
        $this->db->delete('guru');
    }

}

?>