<?php 
session_start();

include('include/connect.php');

if (isset($_POST['btn_login'])) {
    # code...
    $uemail = $_POST['uemail'];
    $upwd = $_POST['upwd'];

    $query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if(password_verify($upwd, $row['upwd'])) {
        $_SESSION['user_id']= $row['id'];
        header("location:dashboard.php");
    }

    elseif($upwd != $row['upwd'] || $uemail != $row['upwd']) {
        $_SESSION['error'] = "You don't have permission to login";
        header("location: ../index.php");
    }
} 
else{
        $_SESSION['error'] = "You don't have permission to login";
        header("location: ../index.php");
    }
    
?>