<?php

  include ('../functions/common_function.php');

  ?>

<?php

if(isset($_POST['u_register'])){
  $u_firstname = $_POST['u_firstname'];
  $u_lastname = $_POST['u_lastname'];
  $u_username = $_POST['u_username'];
  $u_email = $_POST['u_email'];
  $u_password = $_POST['u_password'];
  $u_v_password = $_POST['u_v_password'];

  $u_image = $_FILES['user_image']['name'];
  $user_tmp_image = $_FILES['user_image']['tmp_name'];
  
  $u_city = $_POST['u_city'];
  $u_country = $_POST['u_country'];
  $u_phone = $_POST['u_phone'];
  $u_ip = getIPAddress();
  $u_policy = $_POST['u_policy'];


  // insert query
  move_uploaded_file($user_tmp_image,"../users_images/$u_image");

  require_once 'connect.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($u_firstname, $u_lastname, $u_username, $u_email, $u_password, $u_v_password, $u_image, $u_ip, $u_city, $u_country, $u_phone) !== false) {
      header("location: ../signup.php?error=emptyinput");
      exit();
  }
  if (invalidUid($u_username) !== false) {
      header("location: ../signup.php?error=invaliduid");
      exit();
  }
  if (invalidEmail($u_email) !== false) {
      header("location: ../signup.php?error=invalidemail");
      exit();
  }
  /*
  if (loginUid($username, $u_email) !== false) {
      header("location: ../signup.php?error=invalidlogin");
      exit();
  } */
  if (pwdMatch($u_password, $u_v_password) !== false) {
      header("location: ../signup.php?error=passwordmismatch");
      exit();
  }
  if (uidExists($conn, $u_username) !== false) {
      header("location: ../signup.php?error=usernametaken");
      exit();
  }
  if (uidEmail($conn, $u_email) !== false) {
      header("location: ../signup.php?error=emailtaken");
      exit();
  }
  if (policy($conn, $u_policy) !== false) {
      header("location: ../signup.php?error=u_policy");
      exit();
  }

  createUser($conn, $u_firstname, $u_lastname, $u_username, $u_email, $u_password, $u_image, $u_ip, $u_city, $u_country, $u_phone);

}
else{
  header("location: ../signup.php");
}