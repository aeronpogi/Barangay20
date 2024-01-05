<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_user']))
{
    $ufullname = $_POST['ufullname'];
    $position = $_POST['position'];
    $ucontactno = $_POST['ucontactno'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['upwd'], PASSWORD_DEFAULT);
    $role = '3';
   
    $profileImg = time() . '_' . $_FILES['img']['name'];
    $target = 'officialsimg/' . $profileImg;

  

        
    $img_name = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $img_ex_allowed = array("png", "jpg", "jpeg");


    if(!in_array($img_name,  $img_ex_allowed)) {

        $_SESSION["typeerror"] = "File type is not allowed!";
        header("location:staff.php?error=filetypenotallowed");
        exit();
    }
  

    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){


        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$uemail' ") or die(mysqli_error($conn));
        if (mysqli_num_rows($email_query)>0) {
            # code...
            $_SESSION['error'] = "Email already exist";
            header("location:staff.php");
            exit();
        }else{
            
                $sql = "INSERT INTO brgy_account(fullname, position, contact_no, uemail, upwd, role, image_picture, accountStatus)VALUES (?, ?, ?,?,?, ?, ?, 'Active');";
                $stmt = mysqli_stmt_init($conn);
            
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: staff.php?error=stmtfailed");
                    exit();
                }
                
                mysqli_stmt_bind_param($stmt, "sssssss",  $ufullname, $position ,$ucontactno,$uemail,$upwd, $role, $profileImg);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);

                $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Created staff account for $ufullname', NOW())") or die(mysqli_error($conn));
            
                $_SESSION['success'] = " Barangay Staff Added Successfully";
                header("Location: staff.php");
                exit();
            }
    }
    else {
        header("Location: staff.php?error");
        exit();
    }

}
?>