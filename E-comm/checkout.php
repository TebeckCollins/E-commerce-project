<?php

include_once ('./header.php');
  ?>

<!-- header end -->

<!-- main start -->
  
  <div class="container" style="min-height:48vh;">
    <div class="row px-2">
          <!-- Display checkout options -->
      <div class="col-sm-12 px-2">
        <?php
                if (!isset($_SESSION["username"])) {
                    echo "<script>window.open('login.php','_self')</script>";
                } else{
                    include('payment.php');
                }
        ?>
      </div>
    </div>
</div>

    <!-- footer -->
<?php
  include_once './footer.php';
?>