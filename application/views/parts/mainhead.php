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
          top :10px;
          left :10px;
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

    </style>

	</head>
	<body>