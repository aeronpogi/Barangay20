<?php 

// session_start();

    if(isset($_POST["bns-sumbit"])) {

        $businessName = $_POST["businessName"];
        $businessType = $_POST["businessType"];
        $businessAddress = $_POST["businessAddress"];
        // $businessEmail = $_POST["businessEmail"];
        // $businessContactno = $_POST["businessContactno"];
        $contact = $_POST["contact"];
        $rbi = $_POST["rbi"];
        $uemail = $_POST['uemail'];
        $ufullname = $_POST['uname'];
        $owner = $_POST["owner"];
      
        date_default_timezone_set('Asia/Manila');
        $date = date('F j, Y  ');
        $req_status = "Pending";
        $business_owner = $_POST['owner'];
        // $applicationId = $_POST['applicationId'];
        $permit_type = "BusinessClearance";
        $purpose = 'Business';
        $residentId = $_POST['residentId'];

        $pickupMode = $_POST["pickup"];
           
        $street = $_POST['street'];
        // $img = time() . '_' . $_FILES['img']['name'];

        // $target = '../gcash/' . $img;

        // $fileExt = explode('.', $profileImg);
        // $fileActualExt = strtolower(end($fileExt));
        // $allowed = array('jpg', 'jpeg', 'png');
        
  


    
        require_once 'functions.inc.php';
        require_once 'dbh.inc.php';

        // if(move_uploaded_file($_FILES["img"]["tmp_name"], $target)) {

        //     applicationBusiness($conn, $businessName, $businessType, $businessAddress, $contact, $date, $req_status, $applicationId, $permit_type, $purpose, $uemail, $ufullname, $owner,  $img, $pickupMode);

            
        //     $_SESSION["applicatonSuccess"] = "Your online application has been sent successfully!";
        //     header("location: ../myApplication.php");
        //     exit();
        //     }
        // else {

        //     $img = "none";
        //     applicationBusiness($conn, $businessName, $businessType, $businessAddress, $contact, $date, $req_status, $applicationId, $permit_type, $purpose, $uemail, $ufullname, $owner,  $img, $pickupMode);
        //     header("location: ../myApplication.php");
        //     exit();
        // }

        applicationBusiness($conn, $businessName, $businessType, $businessAddress, $contact, $date, $req_status,  $permit_type, $purpose, $uemail, $ufullname, $pickupMode, $rbi, $residentId);


        
    }

    else {
        header("location: ../myApplication.php?error");
        exit();
    }