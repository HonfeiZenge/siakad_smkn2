<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        // Get the role_id
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        // Get menu id from user_menu table
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menuId = $queryMenu['id'];

        // Get user access
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menuId
        ]);
        
        if($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}