<?php
  include_once ('./header.php');
  include ('functions/common_function.php');
?>

<!-- calling cart function -->
<?php
cart();
?>
    <!-- banner -->
    <div class="p-5 mb-1 bg-light rounded-0">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Project Store</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div>
<!--    <div class="bg-c" style="background-color:lightblue;color:white;">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis adipisci dicta ad harum asperiores, quo distinctio, culpa accusamus nam fuga aperiam saepe unde, eligendi laborum! Quisquam quia illo recusandae minus.</p>
  </div> -->

    <!-- main -->
<div class="container">
    <div class="row px-2">
    <!-- featured Products -->
      <div class="col-sm-10 px-2">
        <div class="row">
          <!-- Display products -->
              <!-- Top Products -->
        <div class="bg-white m-0 p-3">
          <h3 class="text-center">Top Products</h3><br>
        </div>
          <?php
          search_product();
          get_unique_category();
          get_unique_brand();
          ?><br><br>
          <!-- Top Products -->
        <div class="bg-white m-0 p-3">
          <h3 class="text-center">All Products</h3><br>
        </div>
          <?php
          search_product();
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
    <!-- footer -->
<?php
  include_once './footer.php';
?>