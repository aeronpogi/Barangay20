<?php 
    if(isset($_POST["submit"])) {

        $fullname = $_POST["fullname"];
        $rbi = $_POST["rbi"];
        $email = $_POST["email"];
        $purpose = $_POST["purpose"];
        $street = $_POST["street"];
        $household = $_POST["household"];
        $applicationType =$_POST["application"];
        $contactno =$_POST["contactno"];
        $status = "Pending";
        $date = date('Y-m-d');


        $address = $street. " ". $household;
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        application($conn,$fullname, $rbi, $address, $purpose, $contactno, $email, $applicationType, $status, $date);
    }

    else {
        header("location: ../user-home.php");
    }