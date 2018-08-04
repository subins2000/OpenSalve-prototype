<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CampManager extends CI_Controller {

	public function __construct(){
        parent::__construct();

    }

    public function home() {
		$this->load->model('camps');
		$this->load->model('supplies');

		$camps = $this->camps->get_all();

    	$this->load->view('camp-manager/parts/head');
    	$this->load->view('camp-manager/home', ['camps' => $camps]);
    	$this->load->view('camp-manager/parts/foot');
    }

	public function request_supply() {
		$this->load->model('camps');
		$this->load->model('supplies');

		$camps = $this->camps->get_all();

		$data = ['camps' => $camps, 'msg' => ''];

	    if (isset($_POST['item'])) {
			$this->supplies->update_supply($_POST['item'], $_POST['quantity'], $_POST['campID']);
			$data['msg'] = 'Requested for delivery';
		}

    	$this->load->view('camp-manager/parts/head');
    	$this->load->view('camp-manager/request_supply', $data);
    	$this->load->view('camp-manager/parts/foot');
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
