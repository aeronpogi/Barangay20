<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_tenant']))
{
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
    // $occupation = $_POST['occupation'];
    $family_no = $_POST['family_no'];
    $tenant = 'Tenant';
    $voter_status = $_POST['voter'];

    if(empty($_POST['occupation'])) {
        $occupation = 'N/A';
    }else {
        $occupation = $_POST['occupation'];
    }

    $residentNo = $_POST['residentno'];

    $residentId = $rbi_id."-".$family_no."-".$residentNo;
  

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');

    $today = date('m-d-Y');
    $diff = date_diff(date_create($birth_date), date_create($date));
    $age = $diff->format('%y');
     
    $sql2 = mysqli_query($conn,"INSERT INTO rbi_tenant (age, rbi_id,  street, firstname, middlename, lastname, full_name, birth_place, birth_date, gender, civil_status, occupation, family_no, voter_status, resident_no, rnumber,status ,dateAdded, tenantOwner) 
    VALUES('$age','$rbi_id', '$streetno','$fname', '$mname', '$lname','$full_name' ,'$birth_place' ,'$birth_date', '$gender','$civil_status','$occupation','$family_no', '$voter_status','$residentId', '$residentNo','Active', NOW(), 'Tenant')") or die(mysqli_error($conn));


    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added $full_name in RBI $rbi_id', '$date')") or die(mysqli_error($conn));
    $_SESSION['success'] = " Added Successfully";
    header("Location: rbiMemberFamily.php?id=$rbi_id&&familyNo=$family_no");

  
}
?>