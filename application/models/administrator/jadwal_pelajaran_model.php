<?php
class Jadwal_pelajaran_model extends CI_Model {
    public function tampil_data_kelas() {
        $this->db->select('a.id_kelas, a.jenjang_kelas, a.id_kompetensi_keahlian, a.index_kelas, a.jumlah_murid, a.id_guru, b.kode_kompetensi_keahlian, b.nama_kompetensi_keahlian');
        $this->db->from('kelas as a');
        $this->db->join('kompetensi_keahlian as b', 'a.id_kompetensi_keahlian = b.id_kompetensi_keahlian', 'left');
        $this->db->order_by('a.id_kelas', 'asc');
        return $this->db->get()->result_array();
    }

    public function tampil_data_pelajaran() {
        return $this->db->get('mata_pelajaran')->result_array();
    }

    public function tampil_data_tahun_ajaran() {
        return $this->db->get('tahun_ajaran')->result_array();
    }

    public function input_data() {
        $dataKelas = $this->input->post('kelas');

        $data = [
            "id_kelas" => json_encode($dataKelas),
            "id_tahun_ajaran" => $this->input->post("tahun_ajaran"),
            "hari" => $this->input->post("hari"),
            "id_mata_pelajaran" => 1,
            "id_guru" => 7,
            "jam" => 8
        ];

        $this->db->insert('jadwal_pelajaran', $data);
    }
}
?>