<div class="card-title">
    <h3>Camps</h3>
    <h5></h5>
</div>

<div class="form-group has-default has-feedback">
        <script type="text/javascript"   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuWSldX-non0YF-dn35hbE4BcIQoqwDDk&libraries=visualization">
        </script>
        <div id="map" style="height: 400px;width: 100%;"></div>
</div>

<script>
<?php
$c = [];
foreach($camps as $camp) {
    $c[] = [$camp->title . ', <br/>' . $camp->people . ' people reside here', $camp->lat, $camp->lng];
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

var infowindow = new google.maps.InfoWindow;

for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
         position: new google.maps.LatLng(locations[i][1], locations[i][2]),
         map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
         return function() {
             infowindow.setContent(locations[i][0]);
             infowindow.open(map, marker);
         }
    })(marker, i));
}
</script>
