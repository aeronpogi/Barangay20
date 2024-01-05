<?php
// session_start();
include_once('include/connect.php');
include_once('include/session.php');

if (isset($_POST['blotter-submit'])) {
    # code...
    $id = $_POST['id'];
    $status = $_POST['status'];
    $details_session = $_POST['details_session'];
    $details = $_POST['details'];
    $date_session = date('Y-m-d');
    $complainant = $_POST['complainant'];

    $blotterID = $_POST['blotterID'];


    $query = mysqli_query($conn, "update blotter set status='$status', details='$details', date_session='$date_session' where id='$id' ") or die(mysqli_error($conn));

    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', '$status Blotter with ID $blotterID', NOW())") or die(mysqli_error($conn));
    $_SESSION['success'] = "Edited Successfully";
    header("location:blotter.php");
        
   
}else{
    echo "nothing";
}
?>