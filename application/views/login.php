<div class="text-center">
  <?php 
  if($err != ""):
    ?>
    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h3><?=$err; ?></h3>
</div>
<?php endif; ?>
<?php
    echo form_open('signin', array('class' => 'form-signin'));
  ?>
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please Sign in Here</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="uname" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in here</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
</div>