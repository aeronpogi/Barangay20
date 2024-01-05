<?php 
    if(isset($_POST["submit"])) {

        $fullname = $_POST["usersFullname"];
        $to_travel = $_POST["address_to_travel"];
        $ucontact = $_POST["cnumber"];
        $email = $_POST["usersEmail"];
        $purpose = $_POST["usersPurpose"];
        $rbi = $_POST["rbi"];

        date_default_timezone_set('Asia/Manila');
        $date = date('F j, Y g:i:a  ');
        
        $status  = 'Pending';
        $address = $_POST['address'];
        $applicationId = $_POST['applicationId'];
        $permit_type = "Travel Authorization";

        $pickupMode = $_POST["pickupTravel"];
        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../gcash/' . $img;


        // $address = $street. " ". $household;
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            applicationTravel($conn, $fullname, $rbi, $email, $address, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $to_travel, $img, $pickupMode);
        }else {

            $img = "none";
            applicationTravel($conn, $fullname, $rbi, $email, $address, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $to_travel, $img, $pickupMode);
        }


        // $travelauthorization = mysqli_query($conn,"insert into travelauthorization (usersFullname,address_to_travel,cnumber,usersEmail,usersPurpose,time_upload,rbi,req_status,address)values('$usersFullname','$address_to_travel','$cnumber','$usersEmail','$usersPurpose','$time_upload','$rbi','$req_status','$address')");
        //  applicationTravel($conn, $fullname, $rbi, $email, $address, $purpose, $date, $status, $applicationId, $permit_type, $ucontact, $to_travel);
    }

    else {
        header("location: ../user-home.php");
    }