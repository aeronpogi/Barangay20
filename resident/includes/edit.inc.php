<?php

    session_start();

    if(isset($_POST["submit"])) {

        $fname = $_POST["fname"];
        $contactno = $_POST["contactno"];
   
   
        
        $profileImg = time() . '_' . $_FILES['profileImage']['name'];

        $target = '../images/profileImages/' . $profileImg;

        // $fileExt = explode('.', $profileImg);
        // $fileActualExt = strtolower(end($fileExt));
        // $allowed = array('jpg', 'jpeg', 'png');
        
        require_once 'functions.inc.php';
        require_once 'dbh.inc.php';


        $img_name = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
        $img_ex_allowed = array("png", "jpg", "jpeg");


        if(!in_array($img_name,  $img_ex_allowed)) {

            session_start();
            $_SESSION["typeerror"] = "File type is not allowed!";
            header("location: ../userProfile.php?error=filetypenotalowed");
            exit();
        }


        if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
            // $sql = "INSERT INTO users(profile_img) VALUES ('$profileImg');";

            $ID =  $_SESSION["usersid"];

            $sql ="UPDATE user_account SET image_picture=?,  ufullname=?, ucontactno=?  WHERE id=$ID";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../userProfile.phpp?error=stmtfailed");
                exit();
            }
            
        
            mysqli_stmt_bind_param($stmt, "sss",$profileImg ,$fname ,$contactno);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $_SESSION["changedProfile"] = "Your profile has been changed successfully!";
       
            header("location: ../userProfile.php?error=none");
            exit();

        }else {

            edit($conn, $fname, $contactno);
        }



    
    }