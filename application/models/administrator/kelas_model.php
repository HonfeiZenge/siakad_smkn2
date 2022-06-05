<?php

class Kelas_model extends CI_Model {

    public function tampil_data() {
        $this->db->select('a.id_kelas, a.jenjang_kelas, a.id_kompetensi_keahlian, a.index_kelas, a.jumlah_murid, a.id_guru, b.nama_lengkap, c.kode_kompetensi_keahlian, c.nama_kompetensi_keahlian');
        $this->db->from('kelas as a');
        $this->db->join('guru as b', 'a.id_guru = b.id_guru', 'left');
        $this->db->join('kompetensi_keahlian as c', 'a.id_kompetensi_keahlian = c.id_kompetensi_keahlian', 'left');
        $this->db->order_by('a.id_kelas', 'asc');
        return $this->db->get()->result_array();
    }

    public function input_data($data) {
        $this->db->insert('kelas', $data);
    }

    public function edit($id) {
        $this->db->select('a.id_kelas, a.jenjang_kelas, a.id_kompetensi_keahlian, a.index_kelas, a.jumlah_murid, a.id_guru, b.nama_lengkap, c.kode_kompetensi_keahlian, c.nama_kompetensi_keahlian'); 
        $this->db->from('kelas as a');
        $this->db->join('guru as b', 'a.id_guru = b.id_guru', 'left');
        $this->db->join('kompetensi_keahlian as c', 'a.id_kompetensi_keahlian = c.id_kompetensi_keahlian', 'left');
        $this->db->where('a.id_kelas', $id);
        $this->db->order_by('a.id_kelas', 'asc');
        return $this->db->get()->row_array();
    }

    public function update($data) {
        $id = $this->input->post('id');
        $this->db->where('id_kelas', $id);
        $this->db->update('kelas', $data);
    }
    public function delete($id) {
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
    }

}
// $query = $this->db->query("SELECT A.id_kelas, A.jenjang_kelas, A.id_kompetensi_keahlian, A.index_kelas, A.jumlah_murid, A.id_guru, B.nama_lengkap, C.kode_kompetensi_keahlian, C.nama_kompetensi_keahlian
// FROM kelas AS A
// LEFT JOIN guru AS B ON A.id_guru = B.id_guru
// LEFT JOIN kompetensi_keahlian AS C ON A.id_kompetensi_keahlian = C.id_kompetensi_keahlian
// WHERE A.id_kelas = $id
// ORDER BY A.id_kelas ASC
// ");
// return $query->row_array();
?>
