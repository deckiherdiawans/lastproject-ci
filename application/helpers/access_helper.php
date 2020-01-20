<?php
    function is_logged_in() {
        $ci = get_instance();

        if (!$ci->session->userdata('username')) {
            $ci->session->set_flashdata('flash', 'You are not logged in!');

            echo "<div class='flash-data-error' data-flashdata='<?= $ci->session->flashdata('flash'); ?>'></div>";
            redirect('auth/');
        } else {
            $role_id = $ci->session->userdata('role_id');
            $menu = $ci->uri->segment(1);

            $queryMenu  = $ci->db->get_where('agent_menu', ['uri_segment' => $menu])->row_array();
            $menu_id = $queryMenu['id'];

            $userAccess = $ci->db->get_where('user_access_menu', [
                'role_id' => $role_id, 
                'menu_id' => $menu_id
            ]);

            if ($userAccess->num_rows() < 1) {
                redirect('auth/blocked/');
            }
        }
    }
?>