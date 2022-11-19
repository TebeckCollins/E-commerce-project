<?php

  include_once ('./header.php');

  
?>


<!-- header end -->

<!-- main start --> 
<div class="container bg-light"  style="min-height:80vh;">
<div class="row d-flex align-item-center justify-content-center my-3 p-5">
  <h3 class="text-center mb-5">Login</h3>
  <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
            echo "<p class=\"text-center mb-5\" style=\"color: green;\">You successfully signup! Login to Proceed.</p>";
        }
        elseif ($_GET["error"] == "emptyinput") {
            echo "<p class=\"text-center text-danger mb-5\">Fill in all fields!</p>";
        }
        elseif($_GET["error"] == "wronglogin") {
            echo "<p class=\"text-center text-danger mb-5\">User not found! Enter valid login credentials</p>";
        }
        elseif($_GET["error"] == "wrongpwd") {
            echo "<p class=\"text-center text-danger mb-5\">Wrong password! Forgotten password? <a href=\"password_recovery.inc.php\" style=\"font-size:12px;color:blue;text-decoration:underline; \">Click here!</a></p>";
        }
    }
    
    ?>

  <div class="col-md-8 m-auto">
<form action="./includes/login.inc.php" method="post" enctype="multipart/form-data" class="row">
  <div class="form-outline col-md-12 mb-3">
    <label for="username" class="form-label">Email/Username</label>
    <input type="text" class="form-control" name="u_login_username" id="u_login_username" placeholder="Enter your username/email..." autocomplete="off">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-outline col-md-12 mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="u_login_u_password"  class="form-control" id="u_login_u_password" placeholder="Enter your password" autocomplete="off">
    <div id="passwordHelpBlock" class="form-text">
        
    </div>
  </div>
  <div class="form-outline col-md-12 mb-3">
    <input type="checkbox" class="form-check-input" name="u_login_checkIn" id="checkbox" required>
    <label class="form-check-label" for="checkbox">Check me in</label>
  </div>
  <div id="" class="form-outline col-md-12">
    <p>Don't have an account? <a href="signup.php" class="text-decoration-none">Signup </a>today!</p>
  </div>
  <div class="form-outline col-12 mb-3">
    <input type="submit" name="u_login" class="btn btn-primary" value="Login">
  </div>
</form>
  </div>
    </div>
    </div>

<!-- footer -->
</body>
    </html>