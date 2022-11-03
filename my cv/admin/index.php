<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../tools/css/bootstrap.min.css">
    <!-- bootstrap font awesome -->
    <link rel="stylesheet" href="../tools/css/all.min.css">
    <link rel="stylesheet" href="../tools/css/fontawesome.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="./admin.css">
    <title>Admin Dashboard</title>
</head>


<body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="index.php">Collins's Blog</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?personal_details">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Personal Info
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?reference">
              <span data-feather="users" class="align-text-bottom"></span>
              Reference
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?work_experience">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Work Experience
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <?php
        if(isset($_GET['personal_details'])){
            echo "<h1 class=\"h2\">Personal Information</h1>";
        }
        else if(isset($_GET['insert_personal_details'])){
          echo "<h1 class=\"h2\">Add Personal Information</h1>";
        }
        else if(isset($_GET['reference'])){
          echo "<h1 class=\"h2\">Reference</h1>";
        }
        else if(isset($_GET['insert_reference'])){
          echo "<h1 class=\"h2\">Add Reference</h1>";
        }
        else if(isset($_GET['work_experience'])){
          echo "<h1 class=\"h2\">Work Experience</h1>";
        }
        else if(isset($_GET['insert_work_experience'])){
          echo "<h1 class=\"h2\">Add Work Experience</h1>";
        }
        else {
          echo "<h1 class=\"h2\">Dashboard</h1>";
        }
        ?>

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      
      <!-- display nav content -->
      <div class="my-4 w-100 p-100" id="myChart" style="width:auto;height:fit-content;">
      <div class="container">
        <?php
        if(isset($_GET['insert_personal_details'])) {
            include('insert_personal_details.php');
        }
         else if(isset($_GET['personal_details'])){
            include('personal_details.php');
        }
        else if(isset($_GET['reference'])){
           include('reference.php');
       }
       else if(isset($_GET['insert_reference'])){
          include('insert_reference.php');
       }
       else if(isset($_GET['work_experience'])){
          include('work_experience.php');
       }
       else if(isset($_GET['insert_work_experience'])){
          include('insert_work_experience.php');
       }
        ?>
      </div>
      </div> 



      <h2>Section title</h2>
      
<div class=" container-fluid bg-secondary py-4 text-center text-light">
    <p>All rights Reserved &copy Design by Collins-2022</p>
  </div>
    </main>
  </div>
</div>

    
<script src="../tools/js/bootstrap.bundle.min.js"></script>
<script src="./dashboard.js"></script>
</body>
</html>