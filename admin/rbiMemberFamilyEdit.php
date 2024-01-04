<?php
include_once('include/connect.php');
include_once('include/session.php');

if (isset($_POST['btn_edit'])) {
    # code...
    $rbi = $_POST['rbi'];
    $id = $_POST['id'];

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $fullname = $fname. " ". $lname;

    $birth_place = $_POST['birth_place'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $occupation = $_POST['occupation'];
    $voter_status = $_POST["voter_status"];

    $family_no = $_POST['family_no']; 

    $status = $_POST['status'];
    $residentId = $_POST['residentId'];

    $pwd = $_POST['pwd'];

    $query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if(password_verify($pwd, $row['upwd'])) {
        
        $query = mysqli_query($conn, "update rbi_tenant set voter_status='$voter_status', firstname='$fname', lastname='$lname', middlename='$mname', full_name='$fullname', birth_place='$birth_place', birth_date='$birth_date', gender='$gender', civil_status='$civil_status', status='$status' where id='$id' ") or die(mysqli_error($conn));
   
        $query = mysqli_query($conn, "update user_account set ustatus='$status' where residentId='$residentId' ") or die(mysqli_error($conn));
       
        $_SESSION['success'] = "Edited Successfully";
        header("location:rbiMemberFamily.php?id=$rbi&&familyNo=$family_no");
        exit();


    } elseif($pwd != $row['upwd'] || $username != $row['upwd']) {
        $_SESSION['failed'] = "Wrong Password!";
        header("location:rbiMemberFamily.php?id=$rbi&&familyNo=$family_no");
        exit();
    }


    // $query = mysqli_query($conn, "select upwd from brgy_account ") or die(mysqli_error($conn));

 
        
   
}


// if (isset($_POST['archiveSubmit']))  {

//     $rbi = $_POST['rbi'];
//     $id = $_POST['id'];
//     $query = mysqli_query($conn, "update rbi_tenant set status='Active' where id='$id' ") or die(mysqli_error($conn));
//     $_SESSION['success'] = "Edited Successfully";
//     header("location:archive_rbi.php");
//     exit();
// }



?>



