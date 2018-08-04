<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();

      }

    public function home() {
		$this->load->model('camps');

	    if (isset($_POST['lat'])) {
			$this->camps->add_camp($_POST['lat'], $_POST['lng'], $this->session->userdata('id'));
		}

    	$this->load->view('dash/parts/head');
    	$this->load->view("dash/home");
    	$this->load->view('dash/parts/foot');
    }

}
?>
