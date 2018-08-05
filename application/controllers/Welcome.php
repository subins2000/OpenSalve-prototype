<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('parts/mainhead');
		$this->load->view('newindex');
		$this->load->view('parts/foot');
	}


	public function getjson() {

		$this->load->model('camps');
		$camps = $this->camps->get_all();

  $mydata = "";
  $camps = (array) $camps;

  $len = sizeof($camps);
  for($i=0 ; $i<$len ; $i++)
  {
  	$camps[$i] = (array) $camps[$i];
	  $mydata .= '
	    {
	      "type": "Feature",
	      "properties": {
	        "id": "'.$camps[$i]['id'].'",
	        "mag": 3.1,
	        "time": 1507425650893,
	        "felt": null,
	        "title": "'.$camps[$i]['title'].'",
	        "description": "<section class=\"mappopbox\"><p>Affected by Flood</p><p>Affected people: '.$camps[$i]['people'].'</p><p><a href=\"/camps/'.$camps[$i]['id'].'\" target=\"_blank\" title=\"Opens in a new window\" class=\"btn btn-info my-2 my-sm-0\">Information</a><p></section>",
             "icon": "theatre"
	      },
	      "geometry": {
	        "type": "Point",
	        "coordinates": [
	          '.$camps[$i]['lng'].',
	          '.$camps[$i]['lat'].'
	        ]
	      }
	    }';
	    if($i!=$len-1) $mydata .= ",";
	}

	// Echo Data
	echo '{
	  "type": "FeatureCollection",
	  "crs": {
	    "type": "name",
	    "properties": {
	      "name": "urn:ogc:def:crs:OGC:1.3:CRS84"
	    }
	  },
	  "features": [';

  echo $mydata;


    echo']}';
	}

	public function camps($id = '') {
		$this->load->model('camps');

		$camps = $this->camps->get_all();

		$data = ['camps' => $camps, 'id' => $id-1];

		$this->load->view('parts/head');
		$this->load->view('camps', $data);
		$this->load->view('parts/foot');
	}

	public function request() {
		$this->load->view('parts/head');
		$this->load->view('request');
		$this->load->view('parts/foot');
	}
}
