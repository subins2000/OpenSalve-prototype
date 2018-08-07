<div class="card-title">
    <h3>Supply Management</h3>
    <h5></h5>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <div id="map" style="height: 400px;width: 100%;"></div>
        <script type="text/javascript"   src="https://maps.googleapis.com/maps/api/js?key=XXXXCHANGEDXXXX&libraries=visualization">
        </script>
        <script>
        <?php
        $c = [];
        foreach($camps as $camp) {
            $c[] = [$camp->id, $camp->lat, $camp->lng];
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
                     $('#campID').val(locations[i][0]);
                 }
            })(marker, i));
        }
        </script>
        <div style="padding-top: 20px;"
            <label class="col-lg-2 col-sm-3 control-label">Camp ID</label>
            <div class="col-lg-12 col-sm-10">
                <input type="text" id="campID" name="campID" class="form-control input-default">
            </div>
        </div>

        <div class="card-title">
            <h3>Admin Panel</h3>
            <h5></h5>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <canvas id="myChart" width="400" height="100"></canvas>
        <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var data = {
            labels: ["Water Bottles", "Rice", "Eggs"],
            datasets: [
                {
                    label: "Required",
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    data: [150,100,210]
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
