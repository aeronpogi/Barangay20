<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {    

    $fullname = $_POST['fullname'];
    $uemail = $_POST['email'];
    $upwd =  password_hash($_POST['upwd'], PASSWORD_DEFAULT);
    $cnumber = $_POST['cnumber'];
    $role = '1';
    $id = $_POST['id'];
    
    $profileImg = time() . '_' . $_FILES['profile']['name'];
    $path = 'officialsimg/';

    $img_name = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $img_ex_allowed = array("png", "jpg", "jpeg");

    // if(empty($_POST['img'])) {
        
        
        //     $oldImg = "SELECT uemail FROM brgy_account where id='$id'";
        //     $reultImg = mysqli_query($conn, $reultImg);
        // }
        
        
    if(move_uploaded_file($_FILES['profile']['tmp_name'],($path . $profileImg))) {
        if(!in_array($img_name,  $img_ex_allowed)) {
    
            $_SESSION["typeerror"] = "File type is not allowed!";
            header("location:admin.php?error=filetypenotallowed");
            exit();
        }
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
             header("location:admin.php");
            exit();
        }

        else {

            if(empty($_POST['upwd'])) { 

                $pwdQuery = "SELECT * FROM brgy_account WHERE id='$id'";
                $result = mysqli_query($conn, $pwdQuery);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $oldPwd = $row['upwd'];
                    }


                    
                    $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$fullname', contact_no='$cnumber', uemail='$uemail', upwd='$oldPwd'  WHERE id='$id'") or die(mysqli_error($conn));
                  
                    $_SESSION['success'] = "Edited Successfully";
                     header("location:admin.php");
                    exit();
                }
            }
            else {
                $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$fullname', contact_no='$cnumber', uemail='$uemail', upwd='$upwd'  WHERE id='$id'") or die(mysqli_error($conn));
                $_SESSION['success'] = "Edited Successfully";
                 header("location:admin.php");
                exit();

            }
        }
    }

    else {

        // echo "weq";
        // exit();
        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));
        
        if (mysqli_num_rows($email_query)> 0) {
            $_SESSION['error'] = "Email already exist";
             header("location:admin.php");
            exit();
        }

        else {

            if(empty($_POST['pwd'])) { 

                $pwdQuery = "SELECT * FROM brgy_account WHERE id='$id'";
                $result = mysqli_query($conn, $pwdQuery);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $oldPwd = $row['upwd'];
                    }
                    $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$fullname', contact_no='$cnumber', uemail='$uemail', upwd='$oldPwd'  WHERE id='$id'") or die(mysqli_error($conn));
                    $_SESSION['success'] = "Edited Successfully";
                     header("location:admin.php");
                    exit();
                }
            }

            else {
                $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$fullname', contact_no='$cnumber', uemail='$uemail', upwd='$upwd'  WHERE id='$id'") or die(mysqli_error($conn));
                $_SESSION['success'] = "Edited Successfully";
                 header("location:admin.php");
                exit();
            }
        }
    }
   
}


else{
     header("location:admin.php");
    exit();
}
?>