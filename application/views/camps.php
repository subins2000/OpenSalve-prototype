<div class="container">
	<center id="brand-title">
		<h1 style="margin-top: 0;">OpenSalve</h1>
		<p>Relief made possible</p>
	</center>
	<div id="map" style="height: 600px;width: 50%;" class="d-inline-block"></div>
	<div class="d-inline-block" style="vertical-align: top;width: 49%;text-align: center;">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title" id="campName">Alappuzha Relief Effort</h2>
			</div>
		</div><br/>
		<center>
			<div class="card-columns" style="margin-left: 25%;">
				<div class="card stat">
					<div class="card-body">
						<h2 id="peopleCount">980</h2>
						<span>People</span>
					</div>
				</div>
				<div class="card stat">
					<div class="card-body">
						<h2 id="daysCount">34</h2>
						<span>Days</span>
					</div>
				</div>
			</div>
		</center>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <canvas id="myChart" width="400" height="300"></canvas>
        <script>
		var requiredData = [150,100,210];
		var currentData = [50, 47, 87];

        var ctx = document.getElementById("myChart").getContext('2d');
        var data = {
            labels: ["Water Bottles", "Rice", "Eggs"],
            datasets: [
                {
                    label: "Required",
                    backgroundColor: 'rgba(10, 200, 132, 0.6)',
                    data: requiredData
                },
                {
                    label: "Current",
                    backgroundColor: 'rgba(255, 206, 86, 0.6)',
                    data: currentData
                },
            ]
        };

        var myBarChart = new Chart(ctx, {
            type: 'pie',
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

var markers = [];

for (i = 0; i < locations.length; i++) {
	markers[i] = new google.maps.Marker({
		 position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		 map: map
	});

	google.maps.event.addListener(markers[i], 'click', (function(marker, i) {
		return function() {
			$('#campName').text(locations[i][4]);
			$('#peopleCount').text(locations[i][3]);
			$('#daysCount').text(Math.round(Math.random() * 100));

			chart.data.datasets[0].data = [
				Math.round(Math.random() * 100),
				Math.round(Math.random() * 100),
				Math.round(Math.random() * 100)
			];
		    chart.data.labels[5] = "Newly Added";
		    chart.update();
		}
	})(markers[i], i));
}

setTimeout(function() {
	<?php
	if ($id != '') {
	?>
	new google.maps.event.trigger( markers[<?php echo $id + 1;?>], 'click' );
	<?php
	}
	?>
});
</script>
