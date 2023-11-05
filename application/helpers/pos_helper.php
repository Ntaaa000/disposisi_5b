<?php
function infoLogin(){
    $ci = get_instance();
    return $ci->db->get_where('tb_user' , ['username' => $ci->session->userdata('username')])->row_array();
}

function cek_login(){
    $ci = get_instance();
    if(!$ci->session->userdata('username')){
        redirect('login');
    }
}
function cek_user(){
    $ci = get_instance();
    $user = $ci->db->get_where('tb_user' , ['username' => $ci->session->userdata('username')])-row_array();
    if ($user['role'] == 'admin'){


    }else{
        redirect('login/block');
    }
}

$autoload['packages'] = array();

$autoload['libraries'] = array('database','session','form_validation');

$autoload['drivers'] = array();

$autoload['helper'] = array('url','pos');

$autoload['config'] = array();


$autoload['language'] = array();