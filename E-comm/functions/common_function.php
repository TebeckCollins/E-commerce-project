<?php

include('./includes/connect.inc.php');

//getting products
function getProducts(){
    global $conn;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_query = "select * FROM products ORDER BY rand() LIMIT 0,3";
          $result_query = mysqli_query($conn,$select_query);

          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
          echo "<div class='col-sm-4 mb-4'>
          <div class='card' style='width: 20rem;'>
            <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
            <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
              <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
            </div>
          </div>
        </div>";

          }
        }
    }
}

//getting all products function
function getAllProducts(){
  global $conn;
  if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $select_query = "select * FROM products ORDER BY rand()";
        $result_query = mysqli_query($conn,$select_query);

        while($row = mysqli_fetch_assoc($result_query)){
          $product_id = $row['product_id'];
          $product_title = $row['product_title'];
          $product_description = $row['product_description'];
          $product_image1 = $row['product_image1'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];
        echo "<div class='col-sm-4 mb-4'>
                <div class='card' style='width: 20rem;'>
                  <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                  </div>
                </div>
        </div>";

        }
      }
  }
}
//getting unique categories
function get_unique_category(){
    global $conn;

    if(isset($_GET['category'])){
            $categoryId = $_GET['category'];
            $select_query = "select * FROM products where category_id=$categoryId";
          $result_query = mysqli_query($conn,$select_query);
          $num_of_rows = mysqli_num_rows($result_query);
          if($num_of_rows == 0){
            echo "<h2 class='text-center text-danger'>We are sorry, this Category is currently unavailable</h2>";
          }

          //  $row = mysqli_fetch_assoc($result_query);
          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
          echo "<div class='col-sm-4 mb-2'>
                  <div class='card' style='width: 20rem;'>
                    <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                  </div>
          </div>";

            }
    }
}

//getting unique brands
function get_unique_brand(){
    global $conn;

    if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
        $select_query = "select * FROM products where brand_id=$brand_id";
        $result_query = mysqli_query($conn,$select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows == 0){
            echo "<h2 class='text-center text-danger'>We are sorry, this Brand is currently out of stock</h2>";
        }
        while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
          echo "<div class='col-sm-4 mb-2'>
                  <div class='card' style='width: 20rem;'>
                    <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                  </div>
          </div>";

            }
    }
}


// display brands in side-nav
function getBrands(){
    global $conn;
    $select_brands = "Select * from brands;";
      $brands_result = mysqli_query($conn, $select_brands);

      while ($row_data = mysqli_fetch_assoc($brands_result)) {
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id'];
        echo "<li class=\"nav-item\">
              <a href=\"index.php?brand=$brand_id\" class=\"nav-link text-dark\">$brand_title</a>
            </li>";
      }

}

// display categories in side-nav
function getCateories(){
    global $conn;
    $select_categories = "Select * from categories;";
    $category_result = mysqli_query($conn, $select_categories);

    while ($row_data = mysqli_fetch_assoc($category_result)) {
      $category_title = $row_data['category_title'];
      $category_id = $row_data['category_id'];
      echo "<li class=\"nav-item\">
            <a href=\"index.php?category=$category_id\" class=\"nav-link text-dark\">$category_title</a>
          </li>";
    }

}

//search product function
function search_product(){
  global $conn;
  if(isset($_GET['search_result_product'])){
    $search_result_value = $_GET['search_result'];
    $search_query = "select * FROM products where product_keywords like '%$search_result_value%'";
        $result_query = mysqli_query($conn, $search_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows == 0){
            echo "<h2 class='text-center text-danger'>Oops! no result(s) match for \"$search_result_value\".</h2>";
        }
        while($row = mysqli_fetch_assoc($result_query)){
          $product_id = $row['product_id'];
          $product_title = $row['product_title'];
          $product_description = $row['product_description'];
          $product_image1 = $row['product_image1'];
          $product_price = $row['product_price'];
          $category_id = $row['category_id'];
          $brand_id = $row['brand_id'];
        echo "<div class='col-sm-4 mb-4'>
                <div class='card' style='width: 20rem;'>
                  <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                  </div>
                </div>
        </div>";
        }
  }
}
//view more
  function view_details(){
    global $conn;
    if(isset($_GET['product_id'])){
      if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
          $product_id = $_GET['product_id'];
          $select_query = "select * from products where product_id = $product_id";
          $result_query = mysqli_query($conn,$select_query);

          while($row = mysqli_fetch_assoc($result_query)){
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_image3 = $row['product_image3'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
          echo "<div class='col-sm-4 mb-4'>
                  <div class='card' style='width: 20rem;'>
                    <img src='./admin/products/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                      <a href='index.php' class='btn btn-secondary'>Go Home</a>
                    </div>
                  </div>
          </div>
          <div class='col-md-8'>
                <!-- related images -->
                <div class='row'>
                    <div class='col-md-12'>
                        <h5 class='text-center text-secondary mb-5'>$product_title Images</h5>
                    </div>
                    <div class='col-md-6'>
                    <img src='./admin/products/$product_image2' class='card-img-top' alt='$product_title'>

                    </div>
                    <div class='col-md-6'>
                    <img src='./admin/products/$product_image3' class='card-img-top' alt='$product_title'>
                        
                    </div>
                </div>
            </div>
          ";

          }
        }
      }
    }
  }
  //get ip address function
  function getIPAddress() {
    //whether ip address is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_X_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address
    else {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  //$ip = getIPAddress();
  //echo 'User Real IP Address - '.$ip;

  //CART FUNCTION
  function cart(){
    if(isset($_GET['add_to_cart'])){
      global $conn;
      $ip = getIPAddress();
      $get_product_id = $_GET['add_to_cart'];
      $select_query = "select * from cart_details where ip_address='$ip' AND product_id=$get_product_id";
      $result_query = mysqli_query($conn,$select_query);
      $num_of_rows = mysqli_num_rows($result_query);
      if($num_of_rows > 0){
        echo "<script>
        alert('Item already present in cart!');
        </script>";
        echo "<script>
        window.open('index.php','_self')
        </script>";
    }else {
      $insert_query = "INSERT INTO cart_details (product_id, ip_address, quantity, date) values('$get_product_id', '$ip', 0, NOW())";
      $result_query = mysqli_query($conn,$insert_query);
      echo "<script>
        alert('Successfully added to cart!');
        </script>";
      echo "<script>
      window.open('index.php','_self')
      </script>";
    }
    }
  }
