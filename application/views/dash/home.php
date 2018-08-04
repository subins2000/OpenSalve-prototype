<div class="card-title">
    <h3>Welcome To the Admin Panel</h3>
    <h5></h5>
</div>




<?php echo form_open('user/index'); ?>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Camp Location</label>
        <script type="text/javascript"   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuWSldX-non0YF-dn35hbE4BcIQoqwDDk&libraries=visualization">
        </script>
        <div id="map" style="height: 600px;"></div>
        <div class="col-lg-5 col-sm-5">
            <input type="text" id="loc" name="lat" class="form-control input-default ">
        </div>
        <div class="col-lg-5 col-sm-5">
            <input type="text" id="loc" name="lng" class="form-control input-default ">
        </div>
    </div>
</div>

<script>
map = new google.maps.Map(document.getElementById('map'), {
    center: {
        lat: 9.481618,
        lng: 76.387309,
    },
    zoom: 17,
});

//Add listener
google.maps.event.addListener(map, "click", function (event) {
    var latitude = event.latLng.lat();
    var longitude = event.latLng.lng();
    console.log( latitude + ', ' + longitude );

    radius = new google.maps.Circle({map: map,
        radius: 1000,
        center: event.latLng,
        fillColor: '#777',
        fillOpacity: 0.1,
        strokeColor: '#AA0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        draggable: true,    // Dragable
        editable: true      // Resizable
    });

    // Center of map
    map.panTo(new google.maps.LatLng(latitude,longitude));

}); //end addListener
</script>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Title</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" name="title" class="form-control input-default ">
        </div>
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <input type="submit" class="btn btn-success btn-outline btn-block m-b-10">
        </div>
    </div>
</div>
<?php echo form_close(); ?>
