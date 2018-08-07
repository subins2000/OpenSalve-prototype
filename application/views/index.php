<div class="">
	<center id="brand-title">
		<h1 style="margin-top: 0;">OpenSalve</h1>
		<p>Relief made possible</p>
	</center>
	<div id="map" style="height: 600px;width: 100%;"></div>
</div>
<div class="bg-black">
	<div class="container" id="stat-container">
		<div class="card-columns">
			<div class="card stat" style="width: 18rem;">
		  		<div class="card-body">
					<h2>85</h2>
					<span>Camps</span>
				</div>
			</div>
			<div class="card stat" style="width: 18rem;">
		  		<div class="card-body">
					<h2>₹53.4L</h2>
					<span>Relief fund dispersed</span>
				</div>
			</div>
			<div class="card stat" style="width: 18rem;">
		  		<div class="card-body">
					<h2>243</h2>
					<span>Volunteers</span>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=XXXXCHANGEDXXXX&libraries=visualization">
	</script>
	<script>

		/* Data points defined as an array of LatLng objects */
		var heatmapData = [
			new google.maps.LatLng(9.481575, 76.387940),
			new google.maps.LatLng(9.480248, 76.387018),
			new google.maps.LatLng(9.480248, 76.387018),
			new google.maps.LatLng(9.480148, 76.385118),
			new google.maps.LatLng(9.480148, 76.388118),
			new google.maps.LatLng(9.482148, 76.388118),
		];

		map = new google.maps.Map(document.getElementById('map'), {
			center: {
				lat: 9.481618,
				lng: 76.387309,
			},
			zoom: 17,
		});

		var heatmap = new google.maps.visualization.HeatmapLayer({
			data: heatmapData,
			radius: 45,
			opacity: 1,
		});

		heatmap.setMap(map);
	</script>