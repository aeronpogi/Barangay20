<?php 
    if(isset($_POST["submit"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        // $news_name = $_FILES['news-img']['name'];
        // $tmp_name = $_FILES['news-img']['tmp_name'];
        // $file_size = $_FILES['news-img']['size'];
        // $error = $_FILES['news-img']['error'];
        $publish = "Publish";


        date_default_timezone_set('Asia/Manila');
        $date = date('Y-m-d');

        include 'include/connect.php';
        include 'include/session.php';


        $sql = "INSERT INTO news(news_title, news_descri, time_upload, status)VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: news.php?error=stmtfailed");
            exit();
        }
        
        mysqli_stmt_bind_param($stmt, "ssss",  $title, $description , $date, $publish );
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        
        $activityLogsql = mysqli_query($conn, "INSERT INTO activityLog (name, position, action, dates)Values ('$username', '$position', 'Added Announcements Title $title', '$date')") or die(mysqli_error($conn));
    
        header("location: news.php?error=none");
        exit();

        // if($error == 0) {
           

        //     $new_ex_name = strtolower(pathinfo($news_name, PATHINFO_EXTENSION));
        //     $news_ex_allowed = array("png", "jpg", "jpeg");


        //     if(!in_array($new_ex_name,  $news_ex_allowed)) {

        //         session_start();
        //         $_SESSION["typeerror"] = "File type is not allowed!";
        //         header("location: news.php?error=filetypeisnotallowed");
        //         exit();
        //     }

        //     if($new_ex_name == 'png' || $new_ex_name == 'jpg' || $new_ex_name == 'jpeg') {
        //         $new_news_name = uniqid("news-", true).'.'.$new_ex_name ;
        //         $news_upload_path = 'newsimgupload/'.$new_news_name;
        //         move_uploaded_file($tmp_name, $news_upload_path);

        //         $sql = "INSERT INTO news(news_title, news_descri, news_img, time_upload, file_type)VALUES (?, ?, ?, ?, 'img');";
        //         $stmt = mysqli_stmt_init($conn);
            
        //         if (!mysqli_stmt_prepare($stmt, $sql)) {
        //             header("location: news.php?error=stmtfailed");
        //             exit();
        //         }
                
        //         mysqli_stmt_bind_param($stmt, "ssss",  $title, $description ,$new_news_name, $date );
        //         mysqli_stmt_execute($stmt);
        //         mysqli_stmt_close($stmt);
                
                
        //         header("location: news.php?error=none");
        //         exit();
        //     }




        // }

    }

    else {
        header("location: news.php");
        exit();
    }