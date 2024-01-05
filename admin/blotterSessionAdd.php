<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['addSessionBtn']))
{
    /*$user = $user_id;*/
    $complainant = $_POST['complainant'];
    // $complainantAge = $_POST['complainantAge'];
    // $complainantAddress = $_POST['complainantAddress'];
    $complainantContact = $_POST['complainantContact'];

    // $complainee=  $_POST['complainee'];
    // $complaineeAge =$_POST['complaineeAge'];
    // $complaineeAddress= $_POST['complaineeAddress'];
    // $complaineeContact =$_POST['complaineeContact'];

    // $date = $_POST['date'];
    // $date = date('Y-m-d', strtotime($_POST['date']));

    
  
    date_default_timezone_set('Asia/Manila');
    $date = date('M-d-Y');
    // $time = $_POST['time'];
    $time = date('h:i A', strtotime($_POST['time']));

    $img = time() . '_' . $_FILES['img']['name'];
    $target = 'blotterImages/' . $img;
    
    $img_name = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    $img_ex_allowed = array("png", "jpg", "jpeg");

    $blotterID = $_POST['blotterID'];
    $case = $_POST['case'];
    // $location = $_POST['location'];
    $status = 'Active';
    // $details = $_POST['details'];
    $blotterId = $_POST['blotter_id'];
    $sesion_no = $_POST['session'];
    if(!in_array($img_name,  $img_ex_allowed)) {

        $_SESSION["typeerror"] = "File type is not allowed!";
        header("location:blotterSession.php?id=$blotterId&error=filetypenotallowed");
        exit();
    }

    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
     
        $sql = mysqli_query($conn,"INSERT INTO blotter (natureCases, blotter_id, complainant, complainantContact, date, time,  status, session_no, img) 
        VALUES('$case','$blotterId','$complainant','$complainantContact' ,'$date', '$time', '$status','$sesion_no','$img')") or die(mysqli_error($conn));
        $upload = date('F j, Y g:i:a  ');

        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Session $sesion_no to Blotter ID $blotterID', '$date')") or die(mysqli_error($conn));
        $_SESSION['success'] = "Blotter Added Successfully";
        header("Location: blotterSession.php?id=$blotterId");
           
    }

 
        
  
}
?>

