<?php

class Guru_model extends CI_Model {

    public function tampil_data() {
        return $this->db->get('guru')->result_array();
    }

    public function input_data() {
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
            "foto" => $this->input->post("foto")
        ];
        $this->db->insert('guru', $data);
    }

    public function edit($id) {
        return $this->db->get_where('guru', ['id_guru' => $id])->row_array();
    }

    public function update() {
        $id = $this->input->post('id');
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
            "foto" => $this->input->post("foto")
        ];
        $this->db->where('id_guru', $id);
        $this->db->update('guru', $data);
    }

    public function delete($id) {
        $this->db->where('id_guru', $id);
        $this->db->delete('guru');
    }

}

?>