<?php
    session_start();
    if(isset($_POST["submit"])) {

        $oldpwd = $_POST['oldpwd'];
        $newpwd = $_POST['newpwd'];
        $repeatpwd = $_POST['newpwdrepeat'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        
        if($newpwd != $repeatpwd) {
            header("Location: ../edit-password.php?message=passwordsdontmatch");
            exit();
        }
        changepass($conn,$repeatpwd, $newpwd, $oldpwd);
    }
    else {
        header("Location: ../changepassword.php");
        exit();
    }