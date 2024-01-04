<?php
include_once('include/connect.php');
include_once('include/session.php');

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


    $pwd = $_POST['apwd'];

    $query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query);
    if(password_verify($pwd, $row['upwd'])) {
        
        if(move_uploaded_file($_FILES['profile']['tmp_name'],($path . $profileImg))) {
            if(!in_array($img_name,  $img_ex_allowed)) {
        
                $_SESSION["typeerror"] = "File type is not allowed!";
                header("location:staff.php?error=filetypenotallowed");
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
                header("location:staff.php");
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
    
    
                        
                        $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$ufullname', contact_no='$ucontactno', uemail='$uemail', upwd='$oldPwd' ,position='$position' , accountStatus='$accountStatus' WHERE id='$id'") or die(mysqli_error($conn));
           
                      
                        $_SESSION['success'] = "Edited Successfully";
                        header("location:staff.php");
                        exit();
                    }
                }
                else {
                    $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$ufullname', contact_no='$ucontactno', uemail='$uemail', upwd='$upwd' ,position='$position' , accountStatus='$accountStatus' WHERE id='$id'") or die(mysqli_error($conn));
                    $_SESSION['success'] = "Edited Successfully";
                    header("location:staff.php");
                    exit();
    
                }
            }
        }
    
        else {
            $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail'") or die(mysqli_error($conn));
            
            if (mysqli_num_rows($email_query)> 0) {
                $_SESSION['error'] = "Email already exist";
                header("location:staff.php");
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
                        $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$ufullname', contact_no='$ucontactno', uemail='$uemail', upwd='$oldPwd' ,position='$position' , accountStatus='$accountStatus' WHERE id='$id'") or die(mysqli_error($conn));
                        $_SESSION['success'] = "Edited Successfully";
                        header("location:staff.php");
                        exit();
                    }
                }
    
                else {
                    $sql = mysqli_query($conn,"UPDATE brgy_account set  fullname='$ufullname', contact_no='$ucontactno', uemail='$uemail', upwd='$upwd' ,position='$position' , accountStatus='$accountStatus' WHERE id='$id'") or die(mysqli_error($conn));
                    $_SESSION['success'] = "Edited Successfully";
                    header("location:staff.php");
                    exit();
                }
            }
        }


    } elseif($pwd != $row['upwd'] || $username != $row['upwd']) {
      
        $_SESSION['failed'] = "Wrong Password!";
        header("location:staff.php?error=wrongpassword");
        exit();
    }

    
    
   
}


else{
    header("location:staff.php");
    exit();
}
?>