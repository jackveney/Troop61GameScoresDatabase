<?php
  $page_title = 'Login - Troop 61 Game Scores Database';
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
	
<div class="text-center">
<img src="logo/Troop61.png" width="35%" height="35%">
       <h1>Welcome</h1>
       <p>Sign in to Start Your Session</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth_v2.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Password" id="myInput"><br>
            <input type="checkbox" onclick="showPassword()"> Show Password
        </div>
<div class="text-center">
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-center">Login</button>
        </div>
</div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>

<script>
function showPassword() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
