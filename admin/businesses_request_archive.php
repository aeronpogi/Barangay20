<?php

    include_once("include/session.php");

    $id = $_GET['id'];

    $Query = mysqli_query($conn, "update business set status ='Archive' where id='$id' ") or die(mysqli_error($conn));
    // $_SESSION['success'] = "Deleted Successfully";
    header("location:businesses_request.php");

?>