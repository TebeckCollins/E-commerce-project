<?php

    function emptyInputSignup($u_firstname, $u_lastname, $u_username, $u_email, $u_password, $u_v_password, $u_image, $u_ip, $u_city, $u_country, $u_phone) {

        $result;
        if (empty($u_firstname) || empty($u_lastname) || empty($u_username) || empty($u_email) || empty($u_password) || empty($u_v_password) || empty($u_ip) || empty($u_city) || empty($u_country) || empty($u_phone)) {
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }
    function policy($u_policy) {
        if(empty($u_policy)){
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }

    function invalidUid($u_username) {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $u_username)) {
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($u_email) {
        if (!filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }

    function pwdMatch($u_password, $u_V_password) {
        if ($u_password !== $u_V_password) {
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }

    function uidExists($conn, $u_username) {
        $sql = "SELECT * FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $u_username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function uidEmail($conn, $u_email) {
        $sql = "SELECT * FROM users WHERE u_email = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $u_email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function loginUid($conn, $u_username, $u_email) {
        $sql = "SELECT * FROM users WHERE username = ? OR u_email = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $u_username, $u_email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }
    
    function createUser($conn, $u_firstname, $u_lastname, $u_username, $u_email, $u_password, $u_image, $u_ip, $u_city, $u_country, $u_phone) {
        $sql = "INSERT INTO users (firstName, lastName, username, u_email, u_password, u_image, u_ip, u_city, u_country, u_phone) VALUES (?, ?, ?, ?, ?, '$u_image', ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $hashpwd = password_hash($u_password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sssssssss", $u_firstname, $u_lastname, $u_username, $u_email, $hashpwd, $u_ip, $u_city, $u_country, $u_phone);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../login.php?error=none");
        exit();

    }

    function emptyInputlogin($u_username, $u_password){

        if (empty($u_username) || empty($u_password)) {
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $u_login_username, $u_login_u_password) {
        $loginUid = loginUid($conn, $u_login_username, $u_login_username);

        if ($loginUid === false) {
            header("location: ../login.php?error=wronglogin");
            exit();    
        }

        $pwdHashed = $loginUid["u_password"];
        $chkPwd = password_verify($u_login_u_password, $pwdHashed);

        if ($chkPwd === false) {
            header("location: ../login.php?error=wrongpwd");
            exit();
        }
        else if ($chkPwd === true) {
            session_start();
            $_SESSION["userid"] = $loginUid["uid"];
            $_SESSION["username"] = $loginUid["username"];
            header("location: ../index.php");
            exit();
        }

    }

    function empty_contactLogin ($u_email, $u_message){

        if (empty($u_email) || empty($u_message)) {
            $result = true;
        } 
        else{
            $result = false;
        }
        return $result;
    }
    function sendMessage($conn, $email, $message) {
        $sql = "INSERT INTO feedback (email, message) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $email, $message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../index.php?error=messagesent");
        exit();

    }