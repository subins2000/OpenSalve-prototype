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
		$this->load->view('parts/head');
		$this->load->view('newindex');
		$this->load->view('parts/foot');
	}


	public function getjson() {

  $mydata = "";
  $len = 35;
  for($i=0 ; $i<$len ; $i++)
  {
	  $mydata .= '
	    {
	      "type": "Feature",
	      "properties": {
	        "id": "ak169'.rand(10,1000).'",
	        "mag": 3.1,
	        "time": 1507425650893,
	        "felt": null,
	        "tsunami": 0
	      },
	      "geometry": {
	        "type": "Point",
	        "coordinates": [
	          76.'.rand(100,10000).',
	          9.'.rand(100,10000).'
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
}
