<?php
if (isset($_GET['cart'])){
  include_once ('./cart_header.php');
} else{
  include_once ('./header.php');
}
?>

<div class="container" style="min-height:45vh;">
<div class="row m-5">
  <form action="" method="post">
<table class="table">

    <!-- dynamic cart data -->
    <?php
    global $conn;
    $total = 0;
    $product_count = 1;
    $ip = getIPAddress();
    $cart_query = "select * from cart_details where ip_address='$ip'";
    $result = mysqli_query($conn,$cart_query);
    $result_count=mysqli_num_rows($result);
    if ($result_count>0) {
      echo "<thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Product Name</th>
      <th class=\"text-center\" scope=\"col\">Product Image</th>
      <th class=\"text-center\" scope=\"col\">Quantity</th>
      <th class=\"text-center\" scope=\"col\">Total Price</th>
      <th class=\"text-center\" scope=\"col\">Select</th>
      <th class=\"text-center\" scope=\"col\" colspan=\"2\">Operations</th>
    </tr>
  </thead>
  <tbody class=\"table-group-divider\">";
    while ($row=mysqli_fetch_array($result)) {
      $product_id = $row['product_id'];
      $select_products = "select * from products where product_id='$product_id'";
      $product_result = mysqli_query($conn,$select_products);
      while ($price_row=mysqli_fetch_array($product_result)) {
        $product_price = array($price_row['product_price']);
        $price_table = $price_row['product_price'];
        $product_title = $price_row['product_title'];
        $product_image1 = $price_row['product_image1'];
        $product_values = array_sum($product_price);
        $total += $product_values;
    ?>
    <tr>
      <th scope="row"><?php echo $product_count?></th>
      <td><?php echo $product_title?></td>
      <td><img class="cart_img" src="./admin/products/<?php echo $product_image1?>" alt="<?php echo $product_title?>"></td>
      <td class="text-center"><input type="text" name="qty" class="form-input w-50"><br>
      <?php
      $ip = getIPAddress();
      $quantities = 1;
      if(isset($_POST['update_cart'])){
        $quantities = $_POST['qty'];
        $update_cart = "update cart_details set quantity=$quantities where ip_address='$ip'";
        $update_cart_result = mysqli_query($conn, $update_cart);
        $total = $total*$quantities;
      }
      ?>
      <label for="quantity"><?php echo $quantities?></label></td>
      
      <td class="text-center"><?php echo $price_table?> XAF</td>
      <td class="text-center"><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>" id=""></td>
      <td class="text-center">
        <!-- <button class="btn btn-borderless bg-secondary text-white mx-3">Update Cart</button> -->
        <input type="submit" value="Update Cart" name="update_cart" class="btn btn-borderless bg-secondary text-white mx-3">
        <!-- <button class="btn btn-borderless bg-secondary text-white mx-3">Remove Item</button> -->
        <input type="submit" value="Remove Item" name="delete_item" class="btn btn-borderless bg-secondary text-white mx-3">
      </td>
    </tr>
    <?php
      }
        $product_count++;
    }
  }else{
    echo "<p class=\"text-center\"><strong class=\"text-info\">Cart is empty</strong></p>";
  }
    ?>
    
  </tbody>
</table>
    <div class="d-flex">
    <?php
    global $conn;
    $product_count = 1;
    $ip = getIPAddress();
    $cart_query = "select * from cart_details where ip_address='$ip'";
    $result = mysqli_query($conn,$cart_query);
    $result_count=mysqli_num_rows($result);
    if ($result_count>0) {
      echo "<div class=\"d-flex\">
        <h5 class=\"px-3\">Total: <strong class=\"text-info\">$total XAF</strong></h5>
        <input type=\"submit\" value=\"Continue Shopping\" class=\"btn btn-borderless bg-info text-white mx-3\" name='continue_shopping'>
        <input type=\"submit\" value=\"Checkout\" class=\"btn btn-borderless bg-secondary text-white mx-3\" name='checkout'>
      </div>
      <div class=\"\" style=\"margin-left: auto;\">
      <input type=\"submit\" value=\"Remove Selected\" name=\"delete_items\" class=\"btn btn-borderless bg-danger text-white mx-3\">
      </div>";
    }else {
        echo "<input type=\"submit\" value=\"Continue Shopping\" class=\"btn btn-borderless bg-info text-white mx-3\" name='continue_shopping'>";
    }
    if(isset($_POST['continue_shopping'])){
      echo "<script>window.open('display_all.php','_self')</script>";
    }
    if(isset($_POST['checkout'])){
      echo "<script>window.open('checkout.php','_self')</script>";
    }
    ?>
      
    </div>
  </form>
  </div>
</div>

<!-- function to remove item -->
<?php
function  remove_cart_item(){
  global $conn;
  if(isset($_POST['delete_items'])){
    foreach ($_POST['removeitem'] as $remove_id) {
      echo $remove_id;
      $delete_query = "Delete from cart_details where product_id=$remove_id";
      $run_delete_query = mysqli_query($conn, $delete_query);
      if($run_delete_query){
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
  // elseif (isset($_POST['delete_item'])){
  //   $ip = getIPAddress();
  //   $c_query = "select from cart_details where ip_address='$ip'";
  //   $c_result = mysqli_query($conn,$c_query);
  //   if($row=mysqli_fetch_array($c_result)) {
  //     $product_id = $row['product_id'];
  //     $delete_query = "Delete from cart_details where product_id=$product_id";
  //     $run_delete_query = mysqli_query($conn, $delete_query);
  //     if($run_delete_query){
  //       echo "<script>window.open('cart.php','_self')</script>";
  //     }
  //   }
  // }
}

echo $remove_item = remove_cart_item();
?>


<!-- footer -->
<?php
  include_once './footer.php';
?>