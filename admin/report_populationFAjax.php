<?php

usleep( 250000 );
 include('include/connect.php');
//  include('include/sidebar.php');


//    if($_POST['filterSearch']){
   // if(isset($_POST['request'])){
    if(isset($_POST['filterSearch'])){
        $search = $_POST['filterSearch'];


        $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE  status='Deceased' and gender='Female' ");
        $row2 = mysqli_num_rows($query2);
        echo $row2;
        
    }


 

?>

