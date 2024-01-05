<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_tenant']))
{
    /*$user = $user_id;*/
    $rbi_id = $_POST['rbi_id'];
 
    $streetno = $_POST['street'];

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $full_name = $fname . " " . $lname;

    $birth_place = $_POST['birth_place'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter'];
    // $occupation = $_POST['occupation'];
    $family_no = $_POST['fnumber'];
    $tenantOwner = $_POST['tenantOwner'];

    // $age = $_POST['age'];
    if(empty($_POST['occupation'])) {
        $occupation = 'N/A';
    }else {
        $occupation = $_POST['occupation'];
    }

    $residentNo = $rbi_id."-".$family_no."-1";
  

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');


    $today = date('m-d-Y');
    $diff = date_diff(date_create($birth_date), date_create($date));
    $age = $diff->format('%y');
     
    $sql2 = mysqli_query($conn,"INSERT INTO rbi_tenant (age, rbi_id,  street, firstname, middlename, lastname, full_name, birth_place, birth_date, gender, civil_status, occupation, family_no, voter_status, resident_no,  rnumber, status ,dateAdded ,tenantOwner) 
    VALUES('$age','$rbi_id', '$streetno','$fname', '$mname', '$lname','$full_name' ,'$birth_place' ,'$birth_date', '$gender','$civil_status','$occupation','$family_no', '$voter_status','$residentNo', '1', 'Active' , NOW(), 'Tenant')") or die(mysqli_error($conn));
    
   
   $famyid = $rbi_id.'-'.$family_no;
    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added family $full_name in RBI $rbi_id', '$date')") or die(mysqli_error($conn));
    $_SESSION['success'] = "Family added successfully";
    header("Location: rbiMember.php?id=$rbi_id");

  
}
?>