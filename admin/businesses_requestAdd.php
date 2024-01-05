<?php

include("include/connect.php");
include("include/session.php");
if (isset($_POST['businessRequestAdd'])) {
   

    $rbi = $_POST['urbi'];
    $requestor = $_POST['requestor'];
    $residentId = $_POST['residentId'];

    $bname = $_POST['bname'];
    $bcontact = $_POST['bcontact'];
    $bemail = $_POST['bemail'];
    $description = $_POST['description'];

    $blocation = $_POST['blocation'];
    $blocation = str_replace(" ", "+", $blocation);

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $img = time() . '_' . $_FILES['img']['name'];

  
    $target = '../resident/businessImage/' . $img;




    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

        // echo $rbi;
        // echo $requestor;
        // echo $residentId;
        // echo $bname;
        // echo $bcontact;
        // echo $bemail;
        // echo $description;
        // echo $blocation;

        // echo $img;
        // exit();


        $sql = "INSERT INTO business (businessName, location, residentId, businessImg, businessContactno, description, businessEmail, urbi, uname, date_set, udate_approve, bstatus, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), 'Approved','Active');";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location ../user-home.php?error=stmtfailed");
            exit();
        }
        
    
        mysqli_stmt_bind_param($stmt, "sssssssss", $bname, $blocation, $residentId, $img, $bcontact, $description,  $bemail, $rbi, $requestor) ;
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    
        session_start();

        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Business $bname ', '$date')") or die(mysqli_error($conn));

        $_SESSION["added"] = "Added Successfully!";
        header("location: businesses_request.php");
        exit();

     }
}


      
else {
    header("location: businesses_request.php?error");
    exit();
}
?>