<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_user']))
{
    $urbi = $_POST['urbi'];
    $ufullname = $_POST['ufullname'];
    // $residentidName = $_POST['residentidName'];
    $residentId = $_POST['residentId'];
 
    $street = $_POST['street'];

    $ucontactno = $_POST['ucontactno'];
 
    $uemail = $_POST['uemail'];
    $upwd =  password_hash($_POST['upwd'], PASSWORD_DEFAULT);
  

    function uidExits($conn, $uemail) {
        $sql = "SELECT * FROM user_account WHERE uemail =?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location ../index.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", $uemail);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
    
        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else {
            $result = false;
            return $result;
        }
        mysqli_stmt_close($stmt);
    }



    
    $rId = "SELECT * FROM user_account where ufullname='$ufullname';";
    $resultRid = mysqli_query($conn, $rId);
    

    if(mysqli_num_rows($resultRid)>0) {
        $_SESSION['accountExist'] = "Account for ".$ufullname.' '.'already exist!';
        header("Location: residents.php?error=accountExist");
        exit();
    }
    


    if(uidExits($conn,$uemail) !==false) {
        $_SESSION['error'] = " Email is already taken!";
        header("Location: residents.php?error=emailtaken");
        exit();
    }


  
    




  

  

    $sql = "INSERT INTO user_account (residentId, urbi, ufullname, street, ucontactno, uemail, upwd, image_picture,  ustatus) VALUES (?, ?, ?, ?, ?, ?,  ? ,'null', 'Active');";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location ../index.php?error=stmtfailed");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sssssss", $residentId, $urbi, $ufullname, $street,  $ucontactno, $uemail, $upwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Created resident account for $ufullname', NOW())") or die(mysqli_error($conn));
    $_SESSION['success'] = " Resident Added Successfully";
    header("Location: residents.php");
    exit();


   
}
?>