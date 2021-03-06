<?php
function pageFrontEnd($page = '', $data = '')
{
    $ci = get_instance();
    $ci->load->view('user/template/header', $data);
    $ci->load->view('user/template/topbar', $data);
    $ci->load->view('user/' . $page, $data);
    $ci->load->view('user/template/bottombar', $data);
    $ci->load->view('user/template/footer', $data);
}

function pageProfile($page = '', $data = '')
{
    $ci = get_instance();
    $ci->load->view('user/template/header', $data);
    $ci->load->view('user/template/topbar', $data);
    $ci->load->view('user/profile/template/menu', $data);
    $ci->load->view('user/' . $page, $data);
    $ci->load->view('user/profile/template/endmenu', $data);
    $ci->load->view('user/template/bottombar', $data);
    $ci->load->view('user/template/footer', $data);
}

function pageBackend($page = '', $data = '')
{
    $ci = get_instance();
    $ci->load->view('admin/template/header', $data);
    $ci->load->view('admin/template/topbar', $data);
    $ci->load->view('admin/template/sidebar', $data);
    $ci->load->view('admin/' . $page, $data);
    $ci->load->view('admin/template/footer', $data);
}




function session()
{
    $ci = get_instance();
    return $ci->session->userdata('employe');
}
