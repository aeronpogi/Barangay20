<?php 
    session_start();

    if(isset($_POST["archiveSubmit"])) {
        $id = $_POST['id'];
        
        include 'include/connect.php';

        $update = mysqli_query($conn,"update business set status ='none'  where ID ='$id'") or die (mysqli_error($conn));
        $_SESSION['success'] = "Edited successfuly!";
        header('location: archive_businesess.php');
    }

    else {
        header('location: ../index.php');
    }

    