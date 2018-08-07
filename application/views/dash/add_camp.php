<div class="card-title">
    <h3>Add Camp</h3>
    <h5></h5>
</div>


<?php echo form_open('user/add_camp'); ?>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Camp Location</label>
        <script type="text/javascript"   src="https://maps.googleapis.com/maps/api/js?key=XXXXCHANGEDXXXX&libraries=visualization">
        </script>
        <div id="map" style="height: 400px;width: 100%;"></div>
        <div style="padding-top: 20px;" class="row">
            <div class="col-lg-5 col-sm-5">
                <input type="text" id="lat" name="lat" class="form-control input-default ">
            </div>
            <div class="col-lg-5 col-sm-5">
                <input type="text" id="lng" name="lng" class="form-control input-default ">
            </div>
        </div>
    </div>
</div>

<script>
map = new google.maps.Map(document.getElementById('map'), {
    center: {
        lat: 9.481618,
        lng: 76.387309,
    },
    zoom: 15,
});

//Add listener
google.maps.event.addListener(map, "click", function (event) {
    var latitude = event.latLng.lat();
    var longitude = event.latLng.lng();

    $('#lat').val(latitude);
    $('#lng').val(longitude);

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
        <label class="col-lg-2 col-sm-3 control-label">Number of people</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" name="people" class="form-control input-default ">
        </div>
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <input type="submit" class="btn btn-success btn-outline btn-block m-b-10" value="Add Camp">
        </div>
    </div>
</div>
<?php echo form_close(); ?>
