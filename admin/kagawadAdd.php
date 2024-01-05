
<?php
include("include/session.php");
include("include/connect.php");
//check if form is submitted
if (isset($_POST['btn_user']))
{
    // $img = time() . '_' . $_FILES['img']['name'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password =  password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cnumber = $_POST['cnumber'];
    $role = '2';
    $position = $_POST['position'];



    $profileImg = time() . '_' . $_FILES['img']['name'];
    $target = 'officialsimg/' . $profileImg;
    
    $img_name = strtolower(pathinfo($profileImg, PATHINFO_EXTENSION));
    $img_ex_allowed = array("png", "jpg", "jpeg");


    if(!in_array($img_name,  $img_ex_allowed)) {

        $_SESSION["typeerror"] = "File type is not allowed!";
        header("location:kagawad.php?error=filetypenotallowed");
        exit();
    }

    
    if(move_uploaded_file($_FILES['img']['tmp_name'], $target)){
        $email_query = mysqli_query($conn, "select * from brgy_account where uemail='$email' ") or die(mysqli_error($conn));
        if (mysqli_num_rows($email_query)>0) {
            # code...
            $_SESSION['error'] = "Email already exist";
            header("location:kagawad.php?error=emailexist");
            exit();
        }else{
            
                $sql = "INSERT INTO brgy_account(fullname, contact_no, uemail, upwd, role, image_picture, position, accountStatus)VALUES (?, ?, ?,?,?, ?, ?, 'Active');";
                $stmt = mysqli_stmt_init($conn);
            
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: kagawad.php?error=stmtfailed");
                    exit();
                }
                
                mysqli_stmt_bind_param($stmt, "sssssss",  $fullname,$cnumber,$email,$password, $role, $profileImg, $position);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            
                $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Created official account for $fullname', NOW())") or die(mysqli_error($conn));
                $_SESSION['success'] = " Barangay Staff Added Successfully";
                header("Location: kagawad.php");
                exit();
            }
    }

    
    //upload file
    // if($img != '')
    // {
    //     $ext = pathinfo($img, PATHINFO_EXTENSION);
   
    //     $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
    //     //check if file type is valid
    //     if (in_array($ext, $allowed))
    //     {
    //         // get last record id
    //         // $sql = 'select max(id) as id from officials';
    //         // $result = mysqli_query($conn, $sql);
    //         // if ($result > 0)
    //         // {
    //         //     $row = mysqli_fetch_array($result);
    //         //     $img = ($row['id']+1) . '-' . $img;
    //         // }
    //         // else
    //         //     $img = '1' . '-' . $img;
                
    //         //set target directory
    //         $path = 'officialsimg/';
                
    //         $created = @date('Y-m-d H:i:s');
    //         move_uploaded_file($_FILES['img']['tmp_name'],($path . $img));
    //         // insert file details into database
    // //  $sql = mysqli_query($conn,"INSERT INTO officials (img, fullname, email, password, cnumber, role) VALUES('$img','$fullname','$email','$password','$cnumber','$role')") or die(mysqli_error($conn));

    //          $sql1 = mysqli_query($conn,"INSERT INTO user_account (image_picture, ufullname, uemail, upwd, ucontactno, role) VALUES('$img','$fullname','$email','$password','$cnumber','$role')") or die(mysqli_error($conn));

    //         //  $sql2 = mysqli_query($conn,"INSERT INTO officials (img, fullname, email, password, cnumber, role) VALUES('$img','$fullname','$email','$password','$cnumber','$role')") or die(mysqli_error($conn));
    //          $_SESSION['success'] = " Official Added Successfully";
    //         header("Location: kagawad.php");
    //     }
    //     else
    //     {
    //         header("Location: kagawad.php");
    //     }
    // }
    else
        header("Location: kagawad.php");
}
?>