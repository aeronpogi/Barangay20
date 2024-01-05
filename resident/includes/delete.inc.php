<?php

    session_start();

    require_once 'dbh.inc.php';
    $id =$_POST['id'];
    $page = $_POST['page'];

    if($page == 'e-application') {
        
        // $Query = mysqli_query($conn, "delete from application where id='$id' ") or die(mysqli_error($conn));
        // $_SESSION["requestDel"] = "Deleted Successfully!";
        // header("location: ../myApplication.php");
        // exit();

        $Query = mysqli_query($conn, "update application set ustatus='Cancelled'") or die(mysqli_error($conn));
        $_SESSION["cancel"] = "Cancelled Successfully!";
        header("location: ../myApplication.php");
        exit();
    }

    if($page == 'business') {
        // $Query = mysqli_query($conn, "delete from business where id='$id' ") or die(mysqli_error($conn));
        // $_SESSION['requestDel'] = "Deleted Successfully!";
        // header("location: ../business.php");
        // exit();
        $Query = mysqli_query($conn, "update business set bstatus='Cancelled'") or die(mysqli_error($conn));
        $_SESSION["cancel"] = "Cancelled Successfully!";
        header("location: ../business.php");
        exit();
    }
?>