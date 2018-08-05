<div class="container">
    <div class="form-group">
        <label>Name</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" />
        </div>
    </div>
    <div class="form-group">
        <label>Location</label>
        <script type="text/javascript"   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuWSldX-non0YF-dn35hbE4BcIQoqwDDk&libraries=visualization">
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

    <div class="form-group has-default has-feedback">
        <div class="row">
            <div class="col-sm-4">
                <label>Message</label>
            </div>
            <div class="col-sm-10">
                <textarea name="msg" style="width: 100%;height: 200px;"></textarea>
            </div>
        </div>
    </div>

    <div class="form-group has-default has-feedback">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <input type="submit" class="btn btn-success btn-outline btn-block m-b-10" value="Send Message">
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
