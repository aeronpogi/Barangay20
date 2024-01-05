<?php 
    if(isset($_POST["generate"])) {
        require_once 'connect.php';


        $id = $_POST["id"];
        $req_status = 'Approved';
        $date_approve = date('Y-m-d');

        $sql2 = "UPDATE businessclearance SET req_status ='$req_status', date_approve = '$date_approve' WHERE ID = $id";
        mysqli_query($conn, $sql2);

        header("location: ../business_clearance_print.php?id=$id");
        exit();
    }
    else {
      header("location: ../business_clearance_print.php?id=$id");
      exit();
    }