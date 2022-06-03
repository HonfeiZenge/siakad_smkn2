<?php

class Guru extends CI_Model {

    public function tampil_data() {
        return $this->db->get('guru');
    }

    public function input_data($data) {
        $this->db->insert('guru', $data);
    }

    public function edit_data() {}

    public function update_data() {}

    public function hapus_data() {}

}

?>