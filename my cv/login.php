<?php
  include_once ('./header.php');
  include ('functions/common_function.php');
?>

<form class="row g-3 my-5 p-5">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">  
  </div>

  <div class="col-12">
    <button type="button" class="btn btn-primary" value="" name="button" id="button">Sign in</button>
  </div>
</form>

    <!-- footer -->
    
<script src="./searchscript.js"></script>
    <!-- <?php
  // include_once './footer.php';
?> -->