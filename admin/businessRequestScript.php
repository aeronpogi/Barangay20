<?php 

    if(isset($_POST['bRequestEditbtn'])) {

        $id = $_POST['id'];
        $businessName = $_POST['businessName'];
        $businessEmail = $_POST['usersEmail'];
        $businessContactno = $_POST['businessContactno'];
        $location = $_POST['location'];

        $img = time() . '_' . $_FILES['img']['name'];
        $target = '../resident/businessImage/' . $img;

            
        date_default_timezone_set('Asia/Manila');
        $date = date("F j, Y, g:i a");


        include 'include/connect.php';

        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
            $update = mysqli_query($conn,"update business set businessImg='$img',businessName ='$businessName', businessEmail ='$businessEmail' , businessContactno='$businessContactno' , location='$location' where id ='$id'") or die (mysqli_error($conn));
            header('location: businesses_request.php');
            exit();
        }
        else {

            $update = mysqli_query($conn,"update business set businessName ='$businessName', businessEmail ='$businessEmail' , businessContactno='$businessContactno' , location='$location' where id ='$id'") or die (mysqli_error($conn));
            header('location: businesses_request.php');
            exit();
        }
    }

    // else if(isset($_POST["approved"])) {

    //     $id = $_POST['id'];
    //     $date_approve = date('Y-m-d');
    //     $req_status = "Approved";
        
    //     include 'include/connect.php';

    //     $update = mysqli_query($conn,"update business set udate_approve ='$date_approve', bstatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
    //     // header('location: businesses_request.php');

    //     echo 'wew';
    //     exit();
    // }
    // else if (isset($_POST["denied"])) {


    //     $req_status = "Denied";

    //     $id = $_POST['id'];
    //     $date_approve = date('Y-m-d');
        
    //     include 'include/connect.php';
    //     $update = mysqli_query($conn,"update business set udate_approve ='$date_approve', bstatus ='$req_status'  where id ='$id'") or die (mysqli_error($conn));
    //     header('location: businesses_request.php');
    //     exit();
    // }


    else {
        header("location: ../user-home.php");
    }