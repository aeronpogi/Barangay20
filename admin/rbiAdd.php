<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_rbi']))
{
    $rbi_no = $_POST['rbi_no'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];

    
    $full_name = $fname . " " . $lname;
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter_status'];
    
    
    $streetno = $_POST['streetno'];

    $birth_place = $_POST['birth_place'];
    // $occupation = $_POST['occupation'];
    $tenantOwner = $_POST['tenantOwner'];
    $educ = $_POST['educ'];

    if(empty($_POST['occupation'])) {
        $occupation = 'N/A';
    }else {
        $occupation = $_POST['occupation'];
    }

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
    $today = date('m-d-Y');

    $diff = date_diff(date_create($birth_date), date_create($date));

    // echo $diff->format('%y');

    $age = $diff->format('%y');
    // $age = $_POST['age'];

    $residentNo = $rbi_no.'-1-'.'1';

    $checkRbi = "SELECT rbi FROM rbi WHERE rbi ='$rbi_no';";
    $result = mysqli_query($conn, $checkRbi);

    if(mysqli_num_rows($result)>0) { 
        $_SESSION["rbiError"] = " RBI already exist!";
        header("Location: rbiManagement.php");
        exit();
    }




    // mysqli_query($conn,"INSERT INTO rbi ( rbi_no, full_name, gender, birth_date, cnumber, civil_status,address,birth_place, voter_status, house_hold_no) VALUES('$rbi_no','$full_name','$gender','$birth_date','$cnumber' ,'$civil_status','$address','$birth_place', '$voter_status', '$householdno')") or die(mysqli_error($conn));

    $sql2 = mysqli_query($conn,"INSERT INTO rbi_tenant (educ_attainment, rbi_id, street, firstname, middlename, lastname, full_name, birth_place, birth_date, gender, civil_status, occupation, family_no, voter_status, tenantOwner, resident_no, age, rnumber, status , dateAdded) 
    VALUES('$educ','$rbi_no', '$streetno','$fname', '$mname', '$lname','$full_name' ,'$birth_place' ,'$birth_date', '$gender','$civil_status','$occupation','1', '$voter_status', '$tenantOwner',  '$residentNo', '$age','1', 'Active', NOW())") or die(mysqli_error($conn));


 
    
    
    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added $full_name in RBI $rbi_no', '$date')") or die(mysqli_error($conn));
    
    $_SESSION['success'] = " RBI Added Successfully";
    header("Location: rbiManagement.php");
    exit();
  
}
?>