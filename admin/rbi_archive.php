<?php

    include_once("include/session.php");

    $id = $_GET['id'];

    $Query = mysqli_query($conn, "update rbi_tenant set status ='Archive' where rbi_id='$id'") or die(mysqli_error($conn));
    // $_SESSION['success'] = "Deleted Successfully";
    header("location:rbi.php");

?>