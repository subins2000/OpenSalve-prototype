
<div id='map'></div>
<img src="<?=asset_url();?>imgs/logo.png" id="logo">
<div id="reg">
    <ul>
    <?php if(!checklogin()): ?>
      <li>
        <a class="btn btn-outline-secondary my-2 my-sm-0" href="<?=base_url(); ?>signin">Login</a>
      </li>
      <li>
        <a href="<?=base_url(); ?>register" class="btn btn-secondary my-2 my-sm-0" >Signup</a>
      </li>
       <?php else: ?>
       <li>
        <a href="<?=base_url(); ?>user" class="btn btn-secondary my-2 my-sm-0" >Dashboard</a>
        <a href="<?=base_url(); ?>logout" class="btn btn-secondary my-2 my-sm-0" >Logout</a>
      </li>
      <?php endif; ?>
    </ul>
</div>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZ2Vvbmdlb3JnZWsiLCJhIjoiY2prZm5yaWZ5MDluODNrczdrMHRhZHB5eCJ9.xdRyfEKi2zGVLEUHIiVgFA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v9',
    center: [78.9629, 21.7537],
    zoom: 3.8
});

map.on('load', function() {
    // Add a geojson point source.
    // Heatmap layers also work with a vector tile source.
    map.addSource('earthquakes', {
        "type": "geojson",
        "data": "<?=base_url(); ?>getjson"
    });

    map.addLayer({
        "id": "earthquakes-heat",
        "type": "heatmap",
        "source": "earthquakes",
        "maxzoom": 9,
        "paint": {
            // Increase the heatmap weight based on frequency and property magnitude
            "heatmap-weight": [
                "interpolate",
                ["linear"],
                ["get", "mag"],
                0, 0,
                6, 1
            ],
            // Increase the heatmap color weight weight by zoom level
            // heatmap-intensity is a multiplier on top of heatmap-weight
            "heatmap-intensity": [
                "interpolate",
                ["linear"],
                ["zoom"],
                0, 1,
                12, 6
            ],
            // Color ramp for heatmap.  Domain is 0 (low) to 1 (high).
            // Begin color ramp at 0-stop with a 0-transparancy color
            // to create a blur-like effect.
            "heatmap-color": [
                "interpolate",
                ["linear"],
                ["heatmap-density"],
                0, "rgba(33,102,172,0)",
                0.2, "rgb(103,169,207)",
                0.4, "rgb(209,229,240)",
                0.6, "rgb(253,219,199)",
                0.8, "rgb(239,138,98)",
                1, "rgb(178,24,43)"
            ],
            // Adjust the heatmap radius by zoom level
            "heatmap-radius": [
                "interpolate",
                ["linear"],
                ["zoom"],
                0, 2,
                15, 30
            ],
            // Transition from heatmap to circle layer by zoom level
            "heatmap-opacity": [
                "interpolate",
                ["linear"],
                ["zoom"],
                7, 1,
                9, 0
            ],
        }
    }, 'waterway-label');

    map.addLayer({
        "id": "earthquakes-point",
        "type": "circle",
        "source": "earthquakes",
        "minzoom": 7,
        "paint": {
            // Size circle radius by earthquake magnitude and zoom level
            "circle-radius": [
                "interpolate",
                ["linear"],
                ["zoom"],
                7, [
                    "interpolate",
                    ["linear"],
                    ["get", "mag"],
                    1, 1,
                    6, 4
                ],
                16, [
                    "interpolate",
                    ["linear"],
                    ["get", "mag"],
                    1, 5,
                    6, 50
                ]
            ],
            // Color circle by earthquake magnitude
            "circle-color": [
                "interpolate",
                ["linear"],
                ["get", "mag"],
                1, "rgba(33,102,172,0)",
                2, "rgb(103,169,207)",
                3, "rgb(209,229,240)",
                4, "rgb(253,219,199)",
                5, "rgb(239,138,98)",
                6, "rgb(178,24,43)"
            ],
            "circle-stroke-color": "white",
            "circle-stroke-width": 1,
            // Transition from heatmap to circle layer by zoom level
            "circle-opacity": [
                "interpolate",
                ["linear"],
                ["zoom"],
                7, 0,
                8, 1
            ]
        }
    }, 'waterway-label');


    map.on('click', function(e) {
      var features = map.queryRenderedFeatures(e.point, {
        layers: ['earthquakes-point'] // replace this with the name of the layer
      });

      if (!features.length) {
        return;
      }

      var feature = features[0];

      var popup = new mapboxgl.Popup({ offset: [0, -15] })
        .setLngLat(feature.geometry.coordinates)
        .setHTML('<h3>' + feature.properties.title + '</h3><p>'
         + feature.properties.description + '</p>')
        .setLngLat(feature.geometry.coordinates)
        .addTo(map);
    });
});
</script>