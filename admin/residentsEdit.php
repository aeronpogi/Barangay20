<?php
session_start();
include_once('include/connect.php');

if (isset($_POST['btn_edit'])) {
    $id = $_POST['id'];
    $ufullname = $_POST['ufullname'];
    $urbi = $_POST['urbi'];
    $street = $_POST['ustreename'];
    $ucontactno = $_POST['ucontactno'];
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    // $accountStatus = $_POST['accountStatus'];

    $oldEmailquery = "SELECT uemail FROM user_account where id='$id'";
    $resultEmail = mysqli_query($conn, $oldEmailquery);

    if(mysqli_num_rows($resultEmail) > 0) { 
        while($row = mysqli_fetch_assoc($resultEmail)) { 
            $oldEmail = $row['uemail'];
        }
    }

    if($uemail == $oldEmail) {

        $email_query = mysqli_query($conn, "select * from user_account where uemail='$uemail'") or die(mysqli_error($conn));
    
  
        if (mysqli_num_rows($email_query)> 1) {
            $_SESSION['error'] = "Email already exist";
            header("location:residents.php");
            exit();
        }
        else{
    
            if(empty($_POST['pwd'])) {
        
    
    
                $pwdQuery = "SELECT * FROM user_account where id='$id'";
                $result = mysqli_query($conn, $pwdQuery);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
    
    
    
                        
                        $oldPwd = $row['upwd'];
    
                        
                        $sql = mysqli_query($conn,"UPDATE user_account set ufullname='$ufullname', urbi='$urbi', upwd='$oldPwd', uemail='$uemail' WHERE id='$id'") or die(mysqli_error($conn));
                                
            
    
                        $_SESSION['success'] = "Edited Successfully";
                        header("location:residents.php");
                        exit();

                    }
                }
                
            }else {

                    $sql = mysqli_query($conn,"UPDATE user_account set ufullname='$ufullname', urbi='$urbi', upwd='$upwd', uemail='$uemail' WHERE id='$id'") or die(mysqli_error($conn));

                    $_SESSION['success'] = "Edited Successfully";
                    header("location:residents.php");
                    exit();
            
        
                }
            }

    }else {
        $email_query = mysqli_query($conn, "select * from user_account where uemail='$uemail'") or die(mysqli_error($conn));
    

        if (mysqli_num_rows($email_query)> 0) {
            $_SESSION['error'] = "Email already exist";
            header("location:residents.php");
            echo $oldEmail;
            exit();
        }
        else{
    
            if(empty($_POST['pwd'])) {
        
    
    
                $pwdQuery = "SELECT * FROM user_account where id='$id'";
                $result = mysqli_query($conn, $pwdQuery);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                
                        $oldPwd = $row['upwd'];

                        $sql = mysqli_query($conn,"UPDATE user_account set ufullname='$ufullname', urbi='$urbi', upwd='$oldPwd', uemail='$uemail' WHERE id='$id'") or die(mysqli_error($conn));
                    
                     
    
                        $_SESSION['success'] = "Edited Successfully";
                        header("location:residents.php");
                        exit();
        
                    }
                }

            }else {


                $sql = mysqli_query($conn,"UPDATE user_account set ufullname='$ufullname', urbi='$urbi', upwd='$upwd', uemail='$uemail' WHERE id='$id'") or die(mysqli_error($conn));
               

                    $_SESSION['success'] = "Edited Successfully";
                    header("location:residents.php");
                    exit();
        
        
            }
        }
    }




   
}else{
    header ("location: residents.php");
}
?>