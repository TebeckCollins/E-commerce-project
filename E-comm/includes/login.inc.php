<?php

    if (isset($_POST["u_login"])) {

        $u_login_username = $_POST["u_login_username"];
        $u_login_u_password = $_POST["u_login_u_password"];
        $u_login_checkIn = $_POST["u_login_checkIn"];
    
        require_once 'connect.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($u_login_username, $u_login_u_password) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $u_login_username, $u_login_u_password);
    }
    else {
        header("location: ../login.php");
        exit();
    }