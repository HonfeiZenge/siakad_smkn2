<?php

class user_management_model extends CI_Model {

    public function tampil_data() {
        $this->db->select('a.id_user, a.username, a.role_id, a.is_active, a.date_created, b.role');
        $this->db->from('user as a');
        $this->db->join('user_role as b', 'a.role_id = b.id', 'left');
        $this->db->order_by('a.id_user', 'asc');
        return $this->db->get()->result_array();
    }

    public function input_data($data) {

    }

}
?>
