<?php
//A helper to get the asset url
//usage: asset_url()."css/bootstrap.css"
function asset_url() {
	return base_url()."static/";
}
function checklogin(){
	$CI =& get_instance();
    $CI->load->library('session');

	if ($CI->session->userdata('loggedin') == 1) {
		return true;
	} else {
		return false;
	}

}
function getuser(){
	$CI =& get_instance();
    $CI->load->library('session');

	return $CI->session->userdata('user');
}
function logout() {
	$CI =& get_instance();
    $CI->load->library('session');
	$CI->session->sess_destroy();;
	return true;
}
