<?php 

    if(isset($_POST["approved"])) {

        $id = $_POST['id'];
        $date_approve = date('Y-m-d');
        $req_status = "Approved";
        include 'include/connect.php';


        $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
        header('location: travel_authorization.php');
        exit();
    }
    else if (isset($_POST["denied"])) {


        $req_status = "Denied";

        $id = $_POST['id'];
        $date_approve = date('Y-m-d');
        
        include 'include/connect.php';
        $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
        header('location: travel_authorization.php');
        exit();
    }

    else {
        header("location: ../user-home.php");
    }