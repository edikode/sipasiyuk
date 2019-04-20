<?php

function is_logged_in()
{
    $ci = get_instance(); //memanggil library codeigniter didalam fungsi

    if (!$ci->session->userdata('username')) {
        redirect('auth');
    }else {
        $role_id = $ci->session->userdata('role_id');
        
    }
}