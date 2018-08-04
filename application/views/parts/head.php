<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="<?=asset_url(); ?>css/main.css" />
		<link rel="stylesheet" href="<?=asset_url(); ?>css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <?php if(!checklogin()): ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url(); ?>signin">Login</a>
      </li> 
      <li class="nav-item">
        <a href="<?=base_url(); ?>register" class="btn btn-info my-2 my-sm-0" >Signup</a>
      </li>
       <?php else: ?>
       <li class="nav-item">
        <a href="<?=base_url(); ?>logout" class="btn btn-info my-2 my-sm-0" >Logout</a>
      </li>
      <?php endif; ?>
    </ul>
<!--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
<br>
<br>
<br>
