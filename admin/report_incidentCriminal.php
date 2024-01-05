<?php
 include('include/connect.php');


 if (isset($_POST['data2'], $_POST['data3'])){


    
    $from = $_POST['data2'];
    $to = $_POST['data3'];


          
        $query2 = mysqli_query($conn,"SELECT blotterID FROM blotter WHERE  date BETWEEN '$from' and '$to' and natureCases ='Criminal Case'");
        $row2 = mysqli_num_rows($query2);
        echo $row2;

        // echo "wew";
    



    }


 

?>

