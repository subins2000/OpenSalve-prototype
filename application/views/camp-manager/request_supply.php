<div class="card-title">
    <h3>Deliver Item</h3>
    <h5></h5>
    <div class="text-center">
        <?php
        if($msg != "") {
            ?>
            <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h3><?=$msg; ?></h3>
        <?php
        }
        ?>
    </div>
</div>

<?php echo form_open('camp-manager/request'); ?>

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
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Item</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" name="item" class="form-control input-default ">
        </div>
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Required Quantity</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" name="quantity" class="form-control input-default ">
        </div>
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <input type="submit" class="btn btn-success btn-outline btn-block m-b-10" value="Request Supply">
        </div>
    </div>
</div>
<?php echo form_close(); ?>
