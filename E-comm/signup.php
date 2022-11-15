<?php

  include ('./includes/connect.inc.php');
  include ('functions/common_function.php');

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="tools/css/bootstrap.min.css">
    <!-- bootstrap font awesome -->
    <link rel="stylesheet" href="tools/css/all.min.css">
    <link rel="stylesheet" href="tools/css/fontawesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="footer.css">

    <title>SIGNUP</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .cart_img {
          width: 100%;
          height: 90px;
          object-fit: contain;
      }
    </style>
</head>
<body>
  <div class="container-fluid p-0">


  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">COLLINS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_all.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php?cart"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item_count() ?></sup></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link">Total Price: <?php total_cart_price() ?>XAF</a>
                    </li> -->
      </ul>
      <form class="d-flex" role="search" action="search_product.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_result">
<!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
        <input type="submit" value="Search" class="btn btn-outline-success" name="search_result_product">
      </form>
    </div>
  </div>
</nav>
  <!-- secondnav -->
  <div class="container-fluid p-0 bg-dark">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a href="" class="nav-link">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Login</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- header end -->

<!-- main start --> 
<div class="container bg-light"  style="min-height:80vh;">
<div class="row d-flex align-item-center justify-content-center my-3 p-5">
  <h3 class="text-center mb-5">Create Account</h3>
  <div class="col-md-8 m-auto">
<form action="" method="POST" enctype="multipart/form-data" class="row">
  <div class="form-outline col-md-4 mb-3">
    <label for="u_firstname" class="form-label">First name</label>
    <input type="text" name="u_firstname" class="form-control is-valid" id="u_firstname" value="" placeholder="Enter your First Name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="form-outline col-md-4 mb-3">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" name="u_lastname" class="form-control is-valid" id="u_lastname" value="" placeholder="Enter your Last Name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="form-outline col-md-4 mb-3">
    <label for="u_username" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" name="u_username" class="form-control is-invalid" id="u_username" placeholder="Choose a username" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <!-- email -->
  <div class="form-outline col-md-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="u_email" class="form-control is-valid" id="u_email" value="" placeholder="Enter your email" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <!-- password -->
  <div class="form-outline col-md-6 mb-3">
  </div>
  <div class="form-outline col-md-6 mb-3">
    <label for="u_password" class="form-label">Password</label>
    <input type="text" name="u_password" class="form-control is-valid" id="u_password" value="" placeholder="Enter your password" required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <!-- verify password -->
  </div>
  <div class="form-outline col-md-6 mb-3">
    <label for="u_v_password" class="form-label">Verify Password</label>
    <input type="text" name="u_v_password" class="form-control is-valid" id="u_v_password" value="" placeholder="Verify password" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <!-- image -->
  <div class="form-outline col-md-12 mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control is-valid" id="u_image" required>
  </div>
  
  <div class="form-outline col-md-6 mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" name="u_city" class="form-control is-invalid" id="u_city" placeholder="Enter your city" required>
    <div id="validationServerFeedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="form-outline col-md-6 mb-3">
    <label for="country" class="form-label">Country/State</label>
    <select class="form-select selectpicker countrypicker" data-flag="true" id="u_country" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option value="CM">Cameroon</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid country/state.
    </div>
  </div>
  <div class="form-outline col-md-6 mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="tel" name="u_phone" class="form-control is-invalid" id="phone" required>
    <div id="validationServer05Feedback" class="invalid-feedback mb-3">
      Please provide a valid phone.
    </div>
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        seperateDialCode: true
      });
    </script>
  </div>
  <div class="col-md-6 mb-3">
  </div>
  <div class="form-outline col-12 mb-3">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="u_policyCheck" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="policyFeedback" class="invalid-feedback mb-3">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="form-outline col-12 mb-3">
    <button class="btn btn-primary" type="submit" name="u_register">Submit form</button>
    <p class="small fw-bold mt-2 pt-1">Already have an account? <a href="login.php" class="text-decoration-none">Login here!</a></p>
  </div>
</form>
  </div>
    </div>
    </div>

<!-- footer -->
    </body>
    </html>