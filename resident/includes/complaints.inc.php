<?php 
    if(isset($_POST["submit"])) {

        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        // $dates = $_POST['dates'];
        // $timee = $_POST["timee"];
        // $defendant = $_POST["defendant"];
        $details = $_POST["details"];
        $status = 'Active';
        $narration = $_POST['narration'];
        $urbi = $_POST['urbi'];
        $contatno = $_POST['contatno'];
        $residentId = $_POST['residentId'];
        require_once 'connect.php';
    


        $complaints = mysqli_query($conn,"insert into complaints (fullname,email,dates, details, status, narration, urbi, contactno, residentId) values ('$fullname', '$email' , NOW(),  '$details','$status', '$narration', '$urbi', '$contatno',' $residentId')");

            
        session_start();
        $_SESSION['success'] = "Your complaint has been sent successfully!";
        header("location: ../complaints.php?error=none");
    }

    else {
        header("location: ../user-home.php");
    }