<?php
  include_once ('./header.php');
  include ('functions/common_function.php');
?>

<!-- calling cart function -->
<?php
cart();
?>
    <!-- banner -->
    <div class="container-fluid p-5 mb-1 bg-light rounded-0" style="height:60vh;">
      <div class="container py-5 px-5">
        <h1 class="display-1 fw-bold">Project Store</h1>
        <p class="col-md-8 fs-3">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div>

<!--    <div class="bg-c" style="background-color:lightblue;color:white;">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis adipisci dicta ad harum asperiores, quo distinctio, culpa accusamus nam fuga aperiam saepe unde, eligendi laborum! Quisquam quia illo recusandae minus.</p>
  </div> -->

    <!-- main -->
<div class="container">
    <div class="row px-2">
          <!-- Display products -->
      <div class="col-sm-10 px-2">
        <div class="row">
              <!-- Top Products -->
        <div class="bg-white m-0 p-3">
          <h3 class="text-center">Top Products</h3>
          <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
          <?php
          getProducts();
          get_unique_category();
          get_unique_brand();
          ?>
        <!-- featured Products -->
        <div class="bg-white m-0 p-3">
          <h3 class="text-center">Featured Products</h3>
          <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
          <?php
          getProducts();
          get_unique_category();
          get_unique_brand();
          
          ?>
          
        </div>
      </div>
    <!-- sidenav -->
      <div class="col-sm-2 bg-white p-0">
        <!-- Brands -->
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-dark">
              <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
    <?php
      getBrands();
    ?>

          </ul>
        <!-- Categories -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-dark">
              <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
    <?php
       getCateories();
    ?>
          </ul>
      </div>
    </div>
</div>

        <?php
          //$ip = getIPAddress();
          //echo 'User Real IP Address - '.$ip;
          ?>
    <!-- footer -->
<?php
  include_once './footer.php';
?>