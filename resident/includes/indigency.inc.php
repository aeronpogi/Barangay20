<?php 
    if(isset($_POST["submit"])) {

        $fullname = $_POST["usersFullname"];
        $ucontact = $_POST["cnumber"];
        $email = $_POST["usersEmail"];
        $purpose = $_POST["purpose"];
        $rbi = $_POST["rbi"];
        date_default_timezone_set('Asia/Manila');
        $date = date('F j, Y   ');
        $status = 'Pending';
        $street = $_POST['address'];
        // $applicationId = $_POST['applicationId'];
        $permit_type = "Indigency";
        $residentId = $_POST['residentId'];

        $error = $_FILES['img']['error'];
        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../gcash/' . $img;

        $pickupMode = $_POST["pickupIndigency"];


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
            applicationIndigency($conn, $street, $fullname, $rbi, $email, $purpose, $date, $status, $permit_type, $ucontact, $img, $pickupMode, $residentId);
        }else {

            $img = "none";
            applicationIndigency($conn, $street, $fullname, $rbi, $email, $purpose, $date, $status, $permit_type, $ucontact, $img, $pickupMode, $residentId);
        }

  
    }

    else {
        header("location: ../user-home.php");
    }