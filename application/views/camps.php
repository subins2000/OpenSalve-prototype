<div class="container">
	<center id="brand-title">
		<h1 style="margin-top: 0;">OpenSalve</h1>
		<p>Relief made possible</p>
	</center>
	<div id="map" style="height: 600px;width: 50%;" class="d-inline-block"></div>
	<div class="d-inline-block" style="vertical-align: top;width: 49%;">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title" id="campName"></h2>
			</div>
		</div><br/>
		<center>
			<div class="card-columns">
				<div class="card stat">
					<div class="card-body">
						<h2 id="peopleCount"></h2>
						<span>People</span>
					</div>
				</div>
				<div class="card stat">
					<div class="card-body">
						<h2 id="daysCount"></h2>
						<span>Days</span>
					</div>
				</div>
			</div>
		</center>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <canvas id="myChart" width="400" height="300"></canvas>
        <script>
		var requiredData = [150,100,210];
        var ctx = document.getElementById("myChart").getContext('2d');
        var data = {
            labels: ["Water Bottles", "Rice", "Eggs"],
            datasets: [
                {
                    label: "Required",
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    data: requiredData
                },
                {
                    label: "Current",
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    data: [50, 47, 87]
                },
            ]
        };

        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                barValueSpacing: 40,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }]
                }
            }
        });
        </script>
	</div>
</div>
<!--
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
-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuWSldX-non0YF-dn35hbE4BcIQoqwDDk&libraries=visualization">
</script>
<script>
<?php
$c = [];
foreach($camps as $camp) {
	$c[] = [$camp->id, $camp->lat, $camp->lng, $camp->people, $camp->title];
}
$c = json_encode($c);
?>
var locations = <?php echo $c;?>

map = new google.maps.Map(document.getElementById('map'), {
	center: {
		lat: 9.481618,
		lng: 76.387309,
	},
	zoom: 15,
});

for (i = 0; i < locations.length; i++) {
	marker = new google.maps.Marker({
		 position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		 map: map
	});

	google.maps.event.addListener(marker, 'click', (function(marker, i) {
		 return function() {
			 $('#campName').text(locations[i][4]);
			 $('#peopleCount').text(locations[i][3]);
			 $('#daysCount').text(Math.round(Math.random() * 100));
		 }
	})(marker, i));
}
</script>
