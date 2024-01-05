<?php
 include('include/connect.php');


 if (isset($_POST['filterMatch'])){

        $filterMatch = $_POST['filterMatch'];

        if($filterMatch == "Single") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE civil_Status='Single' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Married") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE civil_Status='Married' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "No Educational") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='No Educational' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Elementary Undergraduate") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='Elementary Undergraduate' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Elementary Graduate") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='Elementary Graduate' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Highschool Undergraduate") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='Highschool Undergraduate' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Highschool Graduate") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='Highschool Graduate' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "College Undergraduate") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='College Undergraduate' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "College Graduate") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE educ_attainment ='College Graduate' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }


        elseif($filterMatch == "Voters") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE voter_status='Registered' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Non-voters") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE voter_status='Not-Registered' and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }
    
        elseif($filterMatch == "Infant") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE age <=1 and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Minor") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE age >1 and age <17  and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Adult") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE age >17 and age <58  and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }

        elseif($filterMatch == "Senior") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE age > 59  and status='Active' and gender='Male'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }
        elseif($filterMatch == "Employed") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE  occupation !='N/A' and gender='Male' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }
        elseif($filterMatch == "Unemployed") {

            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE  occupation ='N/A' and gender='Male' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        }



    }


 

?>

