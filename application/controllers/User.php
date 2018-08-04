<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();
        
      }

    public function home() {
    	$this->load->view('parts/head');
    	$this->load->view("dash/home");
    }

  }
?>