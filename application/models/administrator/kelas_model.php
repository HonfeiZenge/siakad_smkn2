<?php

class Kelas_model extends CI_Model {

    public function tampilData() {
        $this->db->order_by('id_kelas', 'ASC');
        $this->db->from('kelas');
        $this->db->join('guru', 'guru.id_guru = kelas.id_guru');
        $this->db->join('tahun_ajaran', 'tahun_ajaran.id_tahun_ajaran = kelas.id_jurusan');
        return $this->db->get()->result();
    }

}

?>