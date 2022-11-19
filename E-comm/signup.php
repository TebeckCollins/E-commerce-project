<?php

  include_once ('./header.php');

  
?>


<!-- header end -->

<!-- main start --> 
<div class="container bg-light"  style="min-height:80vh;">
<div class="row d-flex align-item-center justify-content-center my-3 p-5">
  <h3 class="text-center mb-5">Create Account</h3>
  <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p class=\"text-center text-danger mb-5\">Fill in all fields!</p>";
        }


        elseif($_GET["error"] == "stmtfailed") {
            echo "<p class=\"text-center text-danger mb-5\">Something went wrong. Please try again.</p>";
        }
        elseif($_GET["error"] == "none") {
            echo "<p class=\"text-center mb-5 text-danger\">You successfully signup! Proceed to login</p>";
        }
    }
    ?>
    
  <div class="col-md-8 m-auto">
<form action="./includes/signup.inc.php" method="post" enctype="multipart/form-data" class="row">
  <div class="form-outline col-md-4 mb-3">
    <label for="u_firstname" class="form-label">First name</label>
    <input type="text" name="u_firstname" class="form-control is-valid" id="u_firstname" placeholder="Enter your First Name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="form-outline col-md-4 mb-3">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" name="u_lastname" class="form-control is-valid" id="u_lastname" placeholder="Enter your Last Name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="form-outline col-md-4 mb-3">
    <label for="u_username" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" name="u_username" class="form-control is-valid" id="u_username" placeholder="Choose a username" required>
      <div id="validationServerUsernameFeedback" class="valid-feedback text-danger">
        <?php
        if (isset($_GET["error"])) {
        if($_GET["error"] == "invaliduid") {
            echo "Invalid User Name!";
        }
        if($_GET["error"] == "usernametaken") {
            echo "Sorry, this username is already taken.";
        }
      }
        ?>
      </div>
    </div>
  </div>
  <!-- email -->
  <div class="form-outline col-md-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="u_email" class="form-control is-valid" id="u_email" value="" placeholder="Enter your email" required>
    <div class="valid-feedback text-danger">
      <?php
      if (isset($_GET["error"])) {
        if(!$_GET["error"] == "emailtaken") {
          echo "Sorry, this email is already taken.";
        }
        if($_GET["error"] == "invalidemail") {
            echo "Invalid Email!";
        }
      }
        ?>
    </div>
  </div>
  <!-- password -->
  <div class="form-outline col-md-6 mb-3">
  </div>
  <div class="form-outline col-md-6 mb-3">
    <label for="u_password" class="form-label">Password</label>
    <input type="password" name="u_password" class="form-control is-valid" id="u_password" value="" placeholder="Enter your password" required>
    <div class="valid-feedback">
      Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    <?php
    if (isset($_GET["error"])) {
    if($_GET["error"] == "passwordmismatch"){
      echo "Password didn't match!";
    }
  }
    ?>
    </div>
  </div>
    <!-- verify password -->
  <div class="form-outline col-md-6 mb-3">
    <label for="u_v_password" class="form-label">Verify Password</label>
    <input type="password" name="u_v_password" class="form-control is-valid" id="u_v_password" value="" placeholder="Verify password" required>
    <div class="valid-feedback text-danger">
    <?php
    if (isset($_GET["error"])) {
        if($_GET["error"] == "passwordmismatch") {
            echo "Password didn't match!";
        }
      }
    ?>
    </div>
  </div>
  <!-- image -->
  <div class="form-outline col-md-12 mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" name="user_image" id="user_image" class="form-control" required="required">
  </div>
  <!-- city -->
  <div class="form-outline col-md-6 mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" name="u_city" class="form-control is-valid" id="u_city" placeholder="Enter your city" required>
    <div id="validationServerFeedback" class="valid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <!-- country -->
  <div class="form-outline col-md-6 mb-3">
    <label for="country" class="form-label">Country/State</label>
    <select class="form-select selectpicker countrypicker" data-flag="true" id="u_country" aria-describedby="validationServer04Feedback" name="u_country" required>
      <option selected disabled value="">Choose...</option>
      <option value="CM">Cameroon</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid country/state.
    </div>
  </div>
  <div class="form-outline col-md-6 mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" name="u_phone" class="form-control is-valid" id="phone" required>
    <div id="validationServer05Feedback" class="invalid-feedback mb-3">
      Please provide a valid phone.
    </div>
  </div>
  <div class="col-md-6 mb-3">
  </div>
  <div class="form-outline col-12 mb-3">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="u_policyCheck" name="u_policy" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="policyFeedback" class="invalid-feedback mb-3">
      <?php
      if (isset($_GET["error"])) {
        if($_GET["error"] == "u_policy") {
            echo "You must agree before submitting.";
        }
      }
      ?>
        
      </div>
    </div>
  </div>
  <div class="form-outline col-12 mb-3">
    <input class="btn btn-primary" type="submit" name="u_register" value="Submit form">
    <p class="small fw-bold mt-2 pt-1">Already have an account? <a href="login.php" class="text-decoration-none">Login </a>here!</p>
  </div>
</form>
  </div>
    </div>
    </div>


<!-- footer -->

    <!-- php connect code -->
