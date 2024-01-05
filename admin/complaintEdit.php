<?php
session_start();
include_once('include/connect.php');
include_once('include/session.php');

if (isset($_POST['settled'])) {
    # code...
    $id = $_POST['id'];
    $status = 'Settled';
    $dateSettled = date('Y-m-d');
    $fullname = $_POST['fullname'];


    $query = mysqli_query($conn, "update complaints set status='$status', dateSettled='$dateSettled'  where id='$id' ") or die(mysqli_error($conn));

    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Notified $fullname\'s complain via email', NOW())") or die(mysqli_error($conn));
    $_SESSION['success'] = "Edited Successfully";
    header("location:complaint.php");
        
   
}else{
    echo "nothing";
}
?>