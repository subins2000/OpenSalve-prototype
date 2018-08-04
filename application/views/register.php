<div class="text-center">
	<?php
		echo form_open('register', array('class' => 'form-signin'));
	?>
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please Register Here</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
</div>