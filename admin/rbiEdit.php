<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {
    # code...
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $rbi_no = $_POST['rbi_no'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $cnumber = $_POST['cnumber'];
    $civil_status = $_POST['civil_status'];
    $voter_status = $_POST['voter_status'];
    $address = $_POST['address'];
    $birth_place = $_POST['birth_place'];

    $query = mysqli_query($conn, "update rbi set full_name='$full_name', rbi_no='$rbi_no', gender='$gender', birth_date='$birth_date', cnumber = '$cnumber' , civil_status = '$civil_status' , address = '$address' , birth_place = '$birth_place', voter_status='$voter_status' where id='$id' ") or die(mysqli_error($conn));

    $_SESSION['success'] = "Edited Successfully";
    header("location:rbi.php");
        
   
}else{
    echo "nothing";
}
?>