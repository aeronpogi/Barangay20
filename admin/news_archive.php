<?php

    include_once("include/session.php");

    $id = $_GET['id'];

    $Query = mysqli_query($conn, "update news set news_Status ='Archive' where id='$id' ") or die(mysqli_error($conn));
    // $_SESSION['success'] = "Deleted Successfully";
    header("location:news.php");

?>