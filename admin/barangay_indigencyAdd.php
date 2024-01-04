<?php

include("include/session.php");

if (isset($_POST['indigencyAddBtn'])) {
   
    $rbi = $_POST['urbi'];
    $requestor = $_POST['requestor'];
    $residentId = $_POST['residentId'];
    $street = $_POST['street'];
    $purpose = $_POST['purpose'];
    // $application = 'Barangay Clearance';

   
    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $status = 'Approved';
    $permit_type = 'Indigency';

    include("include/connect.php");
  
    $sql = "INSERT INTO application (street,uname,urbi,upurpose,udate,udate_approve, ustatus,permit_type,residentId, permit_status, receiptImg, requestMode) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?,'none', 'none', 'Walkin');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location barangay_clearance.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt,"ssssssss",$street,$requestor,$rbi,$purpose,$date,$status,$permit_type,$residentId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();

    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Indigency for $requestor', '$date')") or die(mysqli_error($conn));

    $_SESSION["added"] = "Added Successfully!";

    header("location: barangay_indigency.php");
    exit();
}else {
    header("location: barangay_indigency.php");
    exit();
}
?>