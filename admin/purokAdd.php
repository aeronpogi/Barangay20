<?php 
    if(isset($_POST["purokSubmit"])) {
        $purokName = $_POST["purokName"];



        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');

        include 'include/connect.php';
        include 'include/session.php';

        $sql = "SELECT * FROM purok";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) { 
            header("location: purok.php?error=purokAlreadyExist");
            $_SESSION["purokExist"] = "Purok Already Exist!";
            exit();
        }


        $sql = "INSERT INTO purok(purokName, dateAdded)VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: purok.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ss",  $purokName, $date);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Purok $purokName', NOW())") or die(mysqli_error($conn));
       session_start();
        $_SESSION["purokAdded"] = "Added Successfuly!";
        header("location: purok.php?error=none");
        exit();

    }

    else {
        header("location: purok.php");
        exit();
    }