<?php

class Kompetensi_keahlian_model extends CI_Model {
    public function tampil_data() {
        return $this->db->get('kompetensi_keahlian')->result_array();
    }
}

?>