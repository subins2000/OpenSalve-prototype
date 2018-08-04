<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();

      }

    public function home() {
		$this->load->model('camps');

    	$this->load->view('dash/parts/head');
    	$this->load->view("dash/home");
    	$this->load->view('dash/parts/foot');
    }

	public function add_camp() {
		$this->load->model('camps');

	    if (isset($_POST['lat'])) {
			$this->camps->add_camp($_POST['lat'], $_POST['lng'], $_POST['title'], $_POST['people'], $this->session->userdata('user')['id']);
		}

    	$this->load->view('dash/parts/head');
    	$this->load->view("dash/add_camp");
    	$this->load->view('dash/parts/foot');
    }

	public function manage_camp() {
		$this->load->model('camps');

		$camps = $this->camps->get_all();

    	$this->load->view('dash/parts/head');
    	$this->load->view('dash/manage_camp', ['camps' => $camps]);
    	$this->load->view('dash/parts/foot');
    }

}
?>
