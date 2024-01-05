<?php

include("include/session.php");
include("include/connect.php");
if (isset($_POST['submit'])) {
   
    $rbi = $_POST['urbi'];
    $requestor = $_POST['requestor'];
    $residentId = $_POST['residentId'];
    $street = $_POST['street'];
    $purpose = $_POST['purpose'];
    $application = 'BarangayClearance';

    date_default_timezone_set('Asia/Manila');
    $date = date('M-d-Y');
    $status = 'Approved';
    $permit_type = 'BarangayClearance';

  
    $sql = "INSERT INTO application (street,uname,urbi,upurpose,udate,udate_approve, ustatus,permit_type,residentId, permit_status, receiptImg, pickupMode, requestMode) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?,'none', 'none', 'Walk in', 'Walkin');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location barangay_clearance.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt,"ssssssss",$street,$requestor,$rbi,$purpose,$date,$status,$permit_type,$residentId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();


    $_SESSION["added"] = "Added Successfully!";

    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Barangay clearance for $requestor', '$date')") or die(mysqli_error($conn));

    header("location: barangay_clearance.php");
    exit();
}else {
    echo "nothing";
}
?>