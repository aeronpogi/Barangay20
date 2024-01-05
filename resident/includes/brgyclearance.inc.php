<?php 
    if(isset($_POST["submit"])) {

        $fullname = $_POST["fullname"];
        $rbi = $_POST['rbi'];
        $email = $_POST["email"];
        $purpose = $_POST["purpose"];

     
    
        $status = "Pending";
        // $address = $_POST['address'];
        // $applicationId = $_POST['applicationId'];
        $permit_type = "BarangayClearance";
        $ucontact = $_POST['contactno'];
        $residentId = $_POST['residentId'];

        $pickupMode = $_POST["pickup"];

        $street = $_POST['address'];

        date_default_timezone_set('Asia/Manila');
        $date = date('F j, Y ');

        $error = $_FILES['img']['error'];
        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../gcash/' . $img;

        

        // $address = $street. " ". $household;

        $ex_name = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $ex_allowed = array("png", "jpg", "jpeg");


        if($error == 0) {

            if(!in_array($ex_name,  $ex_allowed)) {
    
                session_start();
                $_SESSION["typeerror"] = "File type is not allowed!";
                header("location: ../myApplication.php");
    
                exit();
            }

        }    

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        

        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            applicationBrgy($conn, $street, $fullname, $rbi, $email, $purpose, $date, $status, $permit_type, $ucontact, $img, $pickupMode, $residentId);
        }else {

            $img = "none";
            applicationBrgy($conn, $street, $fullname, $rbi, $email, $purpose, $date, $status, $permit_type, $ucontact, $img, $pickupMode , $residentId);
        }
        // insert($conn, $fullname, $rbi, $email, $address, $purpose, $date, $status);
    }

    else {
        header("location: ../user-home.php");
    }