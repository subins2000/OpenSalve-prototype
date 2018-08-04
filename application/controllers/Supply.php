<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supply extends CI_Controller {

	public function __construct(){
        parent::__construct();

    }

    public function home() {
		$this->load->model('camps');
		$this->load->model('supplies');

		$camps = $this->camps->get_all();

    	$this->load->view('dash/parts/head');
    	$this->load->view('dash/supplies', ['camps' => $camps]);
    	$this->load->view('dash/parts/foot');
    }

	public function add_supply() {
		$this->load->model('camps');
		$this->load->model('supplies');

		$camps = $this->camps->get_all();

		$data = ['camps' => $camps, 'msg' => ''];

	    if (isset($_POST['item'])) {
			$this->supplies->add_supply($_POST['item'], $_POST['quantity'], $_POST['campID']);
			$data['msg'] = 'Queued for delivery';
		}

    	$this->load->view('dash/parts/head');
    	$this->load->view('dash/add_supply', $data);
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
