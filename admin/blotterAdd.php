<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_blotter']))
{
    /*$user = $user_id;*/
    date_default_timezone_set('Asia/Manila');
    $date = date('F j, Y  ');
    // $time = $_POST['time'];
    $time = date('h:i A', strtotime($_POST['time']));
    $complainant = $_POST['complainant'];
    // $complainantAge = $_POST['complainantAge'];
    // $complainantAddress = $_POST['complainantAddress'];
    $complainantContact = $_POST['complainantContact'];

    // $complainee=  $_POST['complainee'];
    // $complaineeAge =$_POST['complaineeAge'];
    // $complaineeAddress= $_POST['complaineeAddress'];
    // $complaineeContact =$_POST['complaineeContact'];

    $case = $_POST['case'];

    // $date = $_POST['date'];
    // $date = date('Y-m-d', strtotime($_POST['date']));

 
    
 

    // $location = $_POST['location'];
    // $status = $_POST['status'];
    // $details = $_POST['details'];

    $upload = $date." ".$time;

    $img = time() . '_' . $_FILES['img']['name'];
    $target = 'blotterImages/' . $img;
    
    $img_name = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    $img_ex_allowed = array("png", "jpg", "jpeg");

    $blotterID = time();
    if(!in_array($img_name,  $img_ex_allowed)) {

        $_SESSION["typeerror"] = "File type is not allowed!";
        header("location:blotter.php?error=filetypenotallowed");
        exit();
    }

    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
     
        $sql = mysqli_query($conn,"INSERT INTO blotter (blotterID, natureCases, complainant, complainantContact, date, time, img, session_no, status) 
        VALUES('$blotterID','$case','$complainant','$complainantContact' ,NOW(), '$time', '$img', '1','Active')") or die(mysqli_error($conn));
    
       $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Blotter for $complainant', '$upload')") or die(mysqli_error($conn));
       $_SESSION['success'] = "Blotter Added Successfully";
       header("Location: blotter.php");
           
    }
  
  
}
?>

