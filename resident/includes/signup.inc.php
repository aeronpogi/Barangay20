<?php
    if (isset($_POST["submit"])) {
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdReapet = $_POST["pwdrepeat"];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if (emptyInputSignup($fname,  $lname, $address, $email, $username, $pwd, $pwdReapet) !== false){
            header("location: ../indexx.php?error=emptyinput");
            exit();
        }
        if (invalidUid($username) !== false) {
            header("location: ../indexx.php?error=invaliduid");
            exit();
        }
        if (invalidEmail($email) !== false) {
            header("location: ../indexx.php?error=invalidemail");
            exit();
        }
        if (passwordLength($pwd) !== false) {
            header("location: ../indexx.php?error=invalidpassword");
            exit();
        }
        if (pwdMatch($pwd ,$pwdReapet) !== false) {
            header("location: ../indexx.php?error=passwordsdontmatch");
            exit();
        }
        if (uidExits($conn, $username, $email) !==false) {
            header("location: ../indexx.php?error=usernametaken");
            exit();
        }

        createUser($conn, $fname, $mname ,$lname ,$address, $email, $username, $pwd);

    }
    else {
        header("location: ../indexx.php");
    }