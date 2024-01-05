<?php 

    include("include/session.php");
    include("include/connect.php");

    if(isset($_POST['submit'])) {

        $brangay_clearance = $_POST['barangay_clearance'];
        $business_clearance = $_POST['business_clearance'];
        $indigency = $_POST['indigency'];
        $delivery_fee = $_POST['delivery_fee'];

        $gName = $_POST['gName'];
        $gNumber = $_POST['gNumber'];

        $error = $_FILES['qrCode']['error'];
        $qrCode = time() . '_' . $_FILES['qrCode']['name'];

        $target = '../resident/gcash/' . $qrCode;

        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');
        

        

        // $address = $street. " ". $household;

        $ex_name = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $ex_allowed = array("png", "jpg", "jpeg");


        if($error == 0) {

            if(!in_array($ex_name,  $ex_allowed)) {
    
                session_start();
                $_SESSION["typeerror"] = "File type is not allowed!";
                header("location: contentDoucmet.php?error=filetypenotallowed");
    
                exit();
            }

        }    

        
        if(move_uploaded_file($_FILES['qrCode']['tmp_name'], $target)) {
            $query = mysqli_query($conn, "update content set barangay_clearance='$brangay_clearance', business_clearance='$business_clearance', indigency='$indigency', delivery_fee='$delivery_fee', gName='$gName', gNumber='$gNumber', qrCode='$qrCode'; ")or die(mysqli_error($conn));
          
            $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Update Document Fee', '$date')") or die(mysqli_error($conn));
            $_SESSION["success"] = "Edited Successfuly!";
            header("Location: contentDoucmet.php");
            exit();
        }else {
        
            $query = mysqli_query($conn, "update content set barangay_clearance='$brangay_clearance', business_clearance='$business_clearance', indigency='$indigency', delivery_fee='$delivery_fee', gName='$gName', gNumber='$gNumber'; ")or die(mysqli_error($conn));
            $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Update Document Fee', '$date')") or die(mysqli_error($conn));
            $_SESSION["success"] = "Edited Successfuly!";
            header("Location: contentDoucmet.php");
            exit();

        }





    }