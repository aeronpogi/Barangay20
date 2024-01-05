<?php 
    session_start();

    if(isset($_POST["rbiarchiveSubmit"])) {
        $id = $_POST['id'];
        
        include 'include/connect.php';

        $update = mysqli_query($conn,"update application set permit_status ='none'  where id ='$id'") or die (mysqli_error($conn));
        $_SESSION['success'] = "Edited successfuly!";
        header('location: archive_application.php');
    }

    else {
        header('location: ../index.php');
    }

    