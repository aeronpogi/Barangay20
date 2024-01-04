<?php

include 'include/connect.php';
include 'include/session.php';
    if(isset($_POST["approved"])) {

        $id = $_POST['id'];
        $date_approve = date('Y-m-d');
        $req_status = "Approved";
        $usersFullname = $_POST['usersFullname'];
        

        $update = mysqli_query($conn,"update business set udate_approve ='$date_approve', bstatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Approved $uname Business request', NOW())") or die(mysqli_error($conn));
    
    
        header('location: businesses_request.php');

        // echo 'wew';
        exit();
    }
    else if (isset($_POST["denied"])) {


        $req_status = "Denied";

        $id = $_POST['id'];
        $date_approve = date('Y-m-d');
        $usersFullname = $_POST['usersFullname'];
        
        $update = mysqli_query($conn,"update business set udate_approve ='$date_approve', bstatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Denined $uname Business request', NOW())") or die(mysqli_error($conn));
    
        header('location: businesses_request.php');
        exit();
    }


    else {
        header("location: ../user-home.php");
    }