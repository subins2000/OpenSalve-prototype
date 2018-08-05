<!DOCTYPE html>
<html lang="en">
	<head>
    <title>OpenSalve</title>
		<link rel="stylesheet" href="<?=asset_url(); ?>css/main.css" />
		<link rel="stylesheet" href="<?=asset_url(); ?>css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; color: white; }
        #map { position:absolute; top:0; bottom:0; width:100%; z-index:-1;}

        #logo {
          position: relative;
          display: inline-block;
          width:250px;
          top :10px;
          left :10px;
        }
        #reqhelp {
          position: fixed;
          width:150px;
          bottom :20px;
          left :20px;
          transition: all .2s ease-in-out;
        }
         #reqhelp:hover {
          transform: scale(1.1);
        }

        #reg {
          position: relative;
          float:right;
          top:10px;
          right:5px;
        }
        #reg ul{
          list-style:none;
        }
        #reg ul li {
          display: inline-block;
        }

        .mappopbox {
          color: #030303;
        }
        .mappopbox h1,h2,h3,h4,h5 {
          color: #030303;
        }
        .mapboxgl-popup-content {
          color: #030303;
        }
        .mapboxgl-ctrl-bottom-left {
          display: none;
        }

    </style>

	</head>
	<body>