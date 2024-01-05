<?php 
    session_start();
    if(isset($_POST["be-submit"])) {

        $ebusinessName = $_POST["ebname"];
        // $ebusinessType = $_POST["ebtype"];
        // $ebusinessProduct = $_POST["eproduct"];
        $ebusinessContactno = $_POST["ebcontactno"];
        $ebusinessEmail = $_POST["ebemail"];
        // $eopeningHours = $_POST["eophrs"];
        $elocation = $_POST["elocation"];
        $location = str_replace(" ", "+", $elocation);
        $ebuid = $_POST['ebuid'];

        $bstatus = "Pending";


        

        $img = time() . '_' . $_FILES['img']['name'];

        $target = '../businessImage/' . $img;

        $img_name = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $img_ex_allowed = array("png", "jpg", "jpeg");


        if(!in_array($img_name,  $img_ex_allowed)) {

            session_start();
            $_SESSION["typeerror"] = "File type is not allowed!";
            header("location: ../business.php?error=filetypenotalowed");
            exit();
        }


        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';
        
          // echo $ebusinessName;
            // echo $ebusinessContactno;
            // echo $ebusinessEmail;
            // echo $elocation;
            // exit();

        
        if(move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
          
            $sql = "UPDATE business set businessName=?, businessContactno=?, businessEmail = ? , location = ? , businessImg =?, bstatus=? where ID='$ebuid'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../business.php?error=stmtfailed");
                exit();
            }
            
        
            mysqli_stmt_bind_param($stmt, "ssssss", $ebusinessName, $ebusinessContactno,  $ebusinessEmail, $location, $img, $bstatus);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $_SESSION['success'] = "Edited Successfully";
            header("location: ../business.php");
            exit();
            

       

        }else {

            // echo $ebusinessName;
            // echo $ebusinessContactno;
            // echo $ebusinessEmail;
            // echo $location;
            // exit();
            $sql = "UPDATE business set businessName=?, businessContactno=?, businessEmail = ? , location = ?, bstatus=?  where ID='$ebuid'";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location ../business.php?error=stmtfailed");
                exit();
            }
            
        
            mysqli_stmt_bind_param($stmt, "sssss", $ebusinessName, $ebusinessContactno,  $ebusinessEmail, $elocation, $bstatus);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $_SESSION['success'] = "Edited Successfully";
            header("location: ../business.php");
            exit();
        }


   
        // businessEdit($conn, $ebusinessName, $ebusinessType, $ebusinessProduct, $ebusinessContactno,  $ebusinessEmail , $eopeningHours, $elocation, $ebuid);

        // $query = mysqli_query($conn, "update business set businessName='$ebusinessName', businessType='$ebusinessType', businessProduct='$ebusinessProduct', businessContactno='$ebusinessContactno', businessEmail = '$ebusinessEmail' , location = '$elocation'  where ID='$ebuid'") or die(mysqli_error($conn));


        // $_SESSION['success'] = "Edited Successfully";
        // header("location: ../business.php");
            
    }

    else {
        header("location: ../user-home.php");
    }