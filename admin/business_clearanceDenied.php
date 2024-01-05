<?php 
    
    include 'include/connect.php';
    include 'include/session.php';

    if($_POST["btn_update"] == 1) {

        $id = $_POST['id'];
        // $date_approve = date('F j, Y h:i A');
        // $date_approve = date('m-d-Y');
        $date_approve = date('Y-m-d');
        // $date_approve = date('y-m-d');
        $req_status = "Approved";
        $uname = $_POST['uname'];

        $fee = $_POST['fee'];

        $pick = "Delivery";
        
        $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status' , fee='$fee', pickupMode='$pick' where id ='$id'") or die (mysqli_error($conn));
       
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Approved $uname Business clearance request', '$date_approve')") or die(mysqli_error($conn));
    
        header('location: business_clearance.php');
    } 
    else if (isset($_POST["denied"])) {


        $req_status = "Denied";

        $id = $_POST['id'];
        $date_approve = date('Y-m-d');
        $uname = $_POST['uname'];

        $update = mysqli_query($conn,"update application set udate_approve ='$date_approve', ustatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Denied $uname Business clearance request', '$date_approve')") or die(mysqli_error($conn));
    
        header('location: business_clearance.php');
    }

    else {
        header('location: business_clearance.php');
    }