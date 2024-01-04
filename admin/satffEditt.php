<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {    
    $id = $_POST['id'];
    $ufullname = $_POST['ufullname'];
    $position = $_POST['position'];
    $ucontactno = $_POST['ucontactno'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $accountStatus = $_POST['accountStatus'];
    $profileImg = time() . '_' . $_FILES['profile']['name'];
    $path = 'officialsimg/';

    $img_name = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $img_ex_allowed = array("png", "jpg", "jpeg");


    if(!in_array($img_name,  $img_ex_allowed)) {

        $_SESSION["typeerror"] = "File type is not allowed!";
        header("location:staff.php?error=filetypenotallowed");
        exit();
    }
  

    if(move_uploaded_file($_FILES['profile']['tmp_name'],($path . $profileImg))) {
        $sql = mysqli_query($conn,"UPDATE brgy_account set image_picture='$profileImg' WHERE id='$id'") or die(mysqli_error($conn));
    }

    $oldEmailquery = "SELECT uemail FROM brgy_account where id='$id'";
    $resultEmail = mysqli_query($conn, $oldEmailquery);

    if(mysqli_num_rows($resultEmail) > 0) { 
        while($row = mysqli_fetch_assoc($resultEmail)) { 
            $oldEmail = $row['uemail'];
        }
    }
    if($uemail == $oldEmail) {
        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));

        if (mysqli_num_rows($email_query)> 1) {
            $_SESSION['error'] = "Email already exist";
            header("location:staff.php");
            exit();
        }else {
            if(empty($_POST['pwd'])) { 

                $pwdQuery = "SELECT * FROM brgy_account WHERE id='$id'";
                $result = mysqli_query($conn, $pwdQuery);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $oldPwd = $row['upwd'];
                    }
                }
               
                $sql ="UPDATE brgy_account SET fullname=?, position, contact_no=?, upwd=?, uemail=?, accountStatus=?  WHERE id=$id";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: staff.php?error=stmtfailed");
                    exit();
                }
                

                mysqli_stmt_bind_param($stmt, "sssssss", $ufullname,  $position, $ucontactno, $oldPwd, $uemail, $accountStatus);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                $_SESSION['success'] = "Edited Successfully";
                header("location:staff.php");
                exit();
            }
        }
    }else {
        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));

        if (mysqli_num_rows($email_query)> 0) {
            $_SESSION['error'] = "Email already exist";
            header("location:staff.php");
            exit();
        }else {
            if(empty($_POST['pwd'])) { 

                $pwdQuery = "SELECT * FROM brgy_account WHERE id='$id'";
                $result = mysqli_query($conn, $pwdQuery);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $oldPwd = $row['upwd'];
                    }
                }
               
                $sql ="UPDATE brgy_account SET fullname=?, position, contact_no=?, upwd=?, uemail=?, accountStatus=?  WHERE id=$id";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("location: staff.php?error=stmtfailed");
                    exit();
                }
                

                mysqli_stmt_bind_param($stmt, "sssssss", $ufullname,  $position, $ucontactno, $upwd, $uemail, $accountStatus);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                $_SESSION['success'] = "Edited Successfully";
                header("location:staff.php");
                exit();
            }
        }
    }


   
}


else{
    header("location:staff.php");
    exit();
}
?>