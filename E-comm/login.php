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
  <h3 class="text-center mb-5">Login</h3>
  <div class="col-md-8 m-auto">
<form action="" method="POST" enctype="multipart/form-data" class="row">
  <div class="form-outline col-md-12 mb-3">
    <label for="exampleInputEmail1" name="u_login_username" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-outline col-md-12 mb-3">
    <label for="inputPassword5" name="u_login_u_password" class="form-label">Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
    <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </div>
  </div>
  <div class="form-outline col-md-12 mb-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" name="u_login_checkIn" for="exampleCheck1">Check me in</label>
  </div>
  <div id="" class="form-outline col-md-12">
    <p>Don't have an account? <a href="signup.php" class="text-decoration-none">Signup today!</a></p>
  </div>
  <div class="form-outline col-12 mb-3">
    <input type="submit" class="btn btn-primary" value="Submit">
  </div>
</form>
  </div>
    </div>
    </div>

<!-- footer -->
</body>
    </html>