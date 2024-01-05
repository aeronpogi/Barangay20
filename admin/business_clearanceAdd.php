<?php
if (isset($_POST['addBusinessBtn'])) {
   

    $rbi = $_POST['urbi'];
    $requestor = $_POST['requestor'];
    $residentId = $_POST['residentId'];
    $businessName = $_POST['businessName'];
    $businessType = $_POST['businessType'];
    $businessAddress = $_POST['businessAddress'];   
    $fee = $_POST['fee'];

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $status = 'Approved';
    $permit_type = 'BusinessClearance';


    include("include/connect.php");
    include("include/session.php");



  

      
    $sql = "INSERT INTO application (businessName, businessType, businessAddress, uname, urbi, udate, udate_approve, ustatus, permit_type, residentId, fee, permit_status, receiptImg, requestMode, pickupMode, upurpose) VALUES (?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?,'none', 'none', 'Walkin','Delivery','Business');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location barangay_clearance.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt,"ssssssssss",$businessName,$businessType, $businessAddress, $requestor,$rbi,$date, $status,$permit_type,$residentId, $fee);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    


    session_start();

    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Business clearance for $requestor', '$date')") or die(mysqli_error($conn));

    $_SESSION["added"] = "Added Successfully!";

    header("location: business_clearance.php");
    exit();
}
else {
    header("location: business_clearance.php");
    exit();
}
?>