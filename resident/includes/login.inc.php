<?php

session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

    if (isset($_POST["submit"])) {

        $radio = $_POST['radio'];

        if($radio == 'Resident') {

            $username = $_POST['uid'];
            $pwd = $_POST['pwd'];
       
            loginUser($conn, $username, $pwd);
        }
        else {

            $username = $_POST['uid'];
            $pwd = $_POST['pwd'];
        
            $query = mysqli_query($conn, "select * from brgy_account where uemail='$username'") or die(mysqli_error($conn));
            $row = mysqli_fetch_assoc($query);
            $count = mysqli_num_rows($query);
            if(password_verify($pwd, $row['upwd'])) {
                
                if($row['accountStatus'] == "Active") {
                    
                    $_SESSION['user_id']= $row['id'];
                    header("location: ../../admin/dashboard.php");
                    exit();
                }else {
                    $_SESSION['Deactivated']= "Your account has been deactivated!";
                    header("location:../../login.php");
                    exit();
                }
            }
        
            elseif($pwd != $row['upwd'] || $username != $row['upwd']) {
                $_SESSION['error'] = "Wrong credentials";
                header("location:../../login.php");
                exit();
            }
        }
      
    }
    else {
        header("location: ../login.php");
        exit();
    }