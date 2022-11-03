<?php
  include_once ('./header.php');
  include ('functions/common_function.php');
?>

    <!-- banner -->
    <div class="container p-5 mb-0 bg-white rounded-0">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Curriculum Vitae</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Don't Click Me!</button>
      </div>
    </div>
    <!-- main -->
<div class="container bg-light">
    <div class="row">
        <div class="col-sm-6 bg-white m-auto px-5">
          <h3 class="text-center">Curriculum Vitae</h3>
            <div class='col-sm-12 mb-4'>
          <?php
          getAllInfo();
          ?>
          <div class='col-md-12'>
          <u><h4 class='text-secondary mb-5'>Work Experience</h4></u>
          <?php
          work_experience();
          ?>
          <div class='col-md-12'>
          <u><h4 class='text-secondary mb-5'>Reference</h4></u>
            <?php
          reference();
          ?>
            </div>
        </div>
    </div>
</div>

    <!-- footer -->
<?php
  include_once './footer.php';
?>