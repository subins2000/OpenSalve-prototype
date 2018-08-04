<div class="card-title">
    <h3>Welcome To the Admin Panel</h3>
    <h5>Blah Blah</h5>
</div>




<form action="http://wishr.me/admin/create" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Slug</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" id="slug" name="slug" class="form-control input-default ">
        </div>
    </div>
</div>

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
        <label class="col-lg-2 col-sm-3 control-label">Share Title</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" name="stitle" class="form-control input-default ">
            <p class="text-muted m-b-15 f-s-12">Shown to users while sharing. The shortcode <code>[name]</code> can be used to substitue player name.</p>
        </div>

    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Result Title</label>
        <div class="col-lg-10 col-sm-9">
            <input type="text" name="rtitle" class="form-control input-default ">
            <p class="text-muted m-b-15 f-s-12">Shown to users when scoring a result. The shortcode <code>[name]</code> can be used to substitue player name and <code>[score]</code> to substitute the player score in 100.</p>
        </div>

    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Description</label>
        <div class="col-lg-10 col-sm-9">
            <textarea name="description" id="desc" class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height:350px"></textarea>

        </div>
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Image</label>
        <div class="col-lg-6 col-sm-6">
            <input type="file" name="img1" value='upload' id="img1">
            <p class="text-muted m-b-15 f-s-12">The image to be shown as featured image. PNG images prefered</p>
        </div>
        <div class="col-lg-4 col-sm-3">
        	<img class="img-responsive" src="http://via.placeholder.com/400x200" id="preview" width="300"/></p>
        </div>
    </div>
</div>

<div class="form-group has-default has-feedback">
    <div class="row">
        <label class="col-lg-2 col-sm-3 control-label">Status</label>
        <div class="col-lg-10 col-sm-9">
            <select class="form-control" name="status">
					<option value="0">Draft</option>
					<option value="1">Published</option>
				</select>

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
</form>
