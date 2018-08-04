<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
        parent::__construct();
        
      }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('user');
		$data["err"] = "";
		if(isset($_POST["uname"]) && $_POST["uname"] != "") {
			if(!isset($_POST["uname"])) {
				$data["err"].="<br>Please enter a password!";
			} else {
				//Added User
				$this->user->save_User($_POST["uname"], $_POST["password"]);
				redirect("register/thankyou");
			}

		}
		$this->load->view('parts/head');
		$this->load->view('register',$data);
		$this->load->view('parts/foot');
	}

	public function login()
	{
		$data["err"] = "";
		$this->load->model('user');
		if(isset($_POST["uname"]) && $_POST["uname"] != "") {
			if(!isset($_POST["uname"])) {
				$data["err"].="<br>Please enter a password!";
			} else {
				//Added User
				$myusers=$this->user->get_user($_POST["uname"], $_POST["password"]);
				if(sizeof($myusers)>0) {
					$myuser = (array) $myusers[0];

					$this->session->set_userdata('user', $myuser);
					$this->session->set_userdata('loggedin', 1);

					redirect("user/home");
					die();


				} else {
					$data["err"].="<br>Wrong Credentials!";
				}
				
				//die();
				
			}

		}

		$this->load->view('parts/head');
		$this->load->view('login',$data);
		$this->load->view('parts/foot');
	}

	public function thankyou() {
		$this->load->view('parts/head');
		$this->load->view('thankyou');
		$this->load->view('parts/foot');
	}
	public function logoutcontroller() {
		logout();
		redirect("/");
	}

	// test fn to add to db
	public function testaddtodb() {

		$this->load->model('user');
		$this->user->save_User('ramanan','mocha');
	}
}
