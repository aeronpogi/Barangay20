<?php
session_start();
include_once('include/connect.php');
include_once('include/session.php');

if (isset($_POST['submit'])) {
    # code...
    $id = $_POST['id'];
    $news_title = $_POST['title'];
    $news_descri = $_POST['description'];
    $status = $_POST['status'];
    // $news_name = $_FILES['news-img']['name'];
    // $tmp_name = $_FILES['news-img']['tmp_name'];
    // $file_size = $_FILES['news-img']['size'];
    // $error = $_FILES['news-img']['error'];


    // $new_ex_name = strtolower(pathinfo($news_name, PATHINFO_EXTENSION));
    // $new_news_name = uniqid("news-", true).'.'.$new_ex_name ;
    // $news_upload_path = 'newsimgupload/'.$new_news_name;


    // if($error == 0) {


    //     $new_ex_name = strtolower(pathinfo($news_name, PATHINFO_EXTENSION));
    //     $news_ex_allowed = array("png", "jpg", "jpeg");


    //     if(!in_array($new_ex_name,  $news_ex_allowed)) {
    
    //         session_start();
    //         $_SESSION["typeerror"] = "File type is not allowed!";
    //         header("location: news.php?error=filetypeisnotallowed");
    //         exit();
    //     }
    
    //     if(move_uploaded_file($tmp_name, $news_upload_path)) {
    
         


                    
    //         $sql ="UPDATE news SET news_title=?, news_descri=?, news_img=? WHERE id=$id";
    //         $stmt = mysqli_stmt_init($conn);
    //         if (!mysqli_stmt_prepare($stmt, $sql)) {
    //             header("location:news.php");
    //             exit();
    //         }
            

    //         mysqli_stmt_bind_param($stmt, "sss",$news_title, $news_descri, $new_news_name);
    //         mysqli_stmt_execute($stmt);
    //         mysqli_stmt_close($stmt);

    //         $_SESSION["EditedNews"] = "Edited Successfully";
    //         header("location:news.php");
    //         exit();
    //     }
    

    // }

    // $query = mysqli_query($conn, "UPDATE news set news_title='$news_title', news_descri='$news_descri' where id='$id' ") or die(mysqli_error($conn));
        
    // $_SESSION["EditedNews"] = "Edited Successfully";
    // header("location:news.php");
    // exit();

    date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');

    $sql ="UPDATE news SET news_title=?, news_descri=?, status=? WHERE id=$id";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:news.php");
        exit();
    }
    

    mysqli_stmt_bind_param($stmt, "sss",$news_title, $news_descri, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    if($status == "Publish") {
        
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Published Announcements $news_title', '$date')") or die(mysqli_error($conn));
    }else {
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Unpublished Announcements $news_title', '$date')") or die(mysqli_error($conn));
    }
     
    
    $_SESSION["EditedNews"] = "Edited Successfully";
    header("location:news.php");
    exit();










        
   
}else{
    header("location: news.php");
    exit();
}
?>