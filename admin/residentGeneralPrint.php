<?php
    include 'include/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="1800; url=../admin/index.php">
  <link href="plugins/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet" type="text/css"/>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/fullcalendar.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Select 2 -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->

  <link href="img/new-logo.png" rel="icon">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>

  
</head>
<body>
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
     

        <div class="col-12 col-sm-6 col-md-12" style="padding: 30px 50px">
        <h6 style="text-align: center">Republic of the Philippines</h6>
        <h6 style="text-align: center">OFFICE OF THE BARANGAY CHAIRMAN</h6>
        <h6 style="text-align: center">BARANGAY 206, ZONE 19, DISCRICT 11, MANILA</h6>
        <h1 style="text-align: center; margin: 40px 0">GENERAL REPORT</h1>
        <h2><?php echo  date("Y/m/d");?></h2>
        <div class="info-box mb-3" style="margin: auto" id="content">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">CATEGORY</th>
            <th scope="col">TOTAL POPULATION</th>
            <th scope="col">MALE</th>
            <th scope="col">FEMALE </th>
            </tr>

            
        </thead>

  
  <tbody>
    <tr>
      <th colspan="4" style="text-align: center; background: beige;">RESIDENT</th>
  
    </tr>
    <tr>
      <td >Registered Voter</td>
      <td>  <?php
                  $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where voter_status='Registered' and status='Active'");
                  $row2 = mysqli_num_rows($query2);

                  // echo $row+$row2;
                  echo $row2;
               ?>
        </td>
      <td>
      <?php
        $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where voter_status='Registered' and gender='Male' and status='Active'");
        $row2 = mysqli_num_rows($query2);

        // echo $row+$row2;
        echo $row2;
    ?>
      </td>

      <td>
      <?php
        $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where voter_status='Registered' and gender='Female' and status='Active'");
        $row2 = mysqli_num_rows($query2);

        // echo $row+$row2;
        echo $row2;
    ?>
      </td>
    </tr>

    <tr>
    <th colspan="4" style="text-align: center; background: beige;">AGE GROUP</th>
    </tr>
    <tr>
        <td>Infant</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age <= 1 and status='Active'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;

   

        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age <= 1 and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age <= 1 and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Minor</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >1 and age <= 17 and status='Active'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >1 and age <= 17 and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >1 and age <= 17 and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Adult</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >18 and age <59 and status='Active'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >18 and age <59 and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >18 and age <59 and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Senior</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >59 and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >59  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where age >59  and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
         <th colspan="4" style="text-align: center; background: beige;">CIVIL STATUS</th>
    </tr>

    <tr>
        <td>Married</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where civil_status ='Married' and status='Active'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where civil_status ='Married' and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where civil_status ='Married'  and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Single</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where civil_status ='Single' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where civil_status ='Single' and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where civil_status ='Single'  and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
         <th colspan="4" style="text-align: center; background: beige;">EDUCATIONAL ATTAINMENT</th>
    </tr>

    <tr>
        <td>No Educational</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='No educational' and status='Active'");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='No educational' and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='No educational'  and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Elementary Undergraduate</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Elementary Undergraduate' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Elementary Undergraduate'  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Elementary Undergraduate'   and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Elementary Graduate</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Elementary Graduate' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Elementary Graduate'  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Elementary Graduate'   and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>Highschool Undergraduate</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Highschool Undergraduate' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Highschool Undergraduate'  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Highschool Undergraduate'   and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    
    <tr>
        <td>Highschool Graduate</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Highschool Graduate' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Highschool Graduate'  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='Highschool Graduate'   and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>College Undergraduate</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='College Undergraduate' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='College Undergraduate'  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='College Undergraduate'   and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>

    <tr>
        <td>College Graduate</td>
        <td>
        <?php
            $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='College Graduate' and status='Active' ");
            $row2 = mysqli_num_rows($query2);
            echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='College Graduate'  and gender='Male' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
        <td>
        <?php
           $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where educ_attainment='College Graduate'   and gender='Female' and status='Active'");
           $row2 = mysqli_num_rows($query2);
           echo $row2;
        ?>
        </td>
    </tr>
  </tbody>
</table>

                </diiv>
                
            </div>
            <div style="float: right"  id="btn">
            <a a href="javascript:Clickheretoprint()" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a>
             </div>
        </div>
        
    </div>
</section>
<script>
        function Clickheretoprint()
        { 

            window.print();
            

            
        // var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
        // disp_setting+="scrollbars=yes,width=1100px, height=1000px, left=150, top=25"; 
        // var content_vlue = document.getElementById("content").innerHTML; 

        // var docprint=window.open("","",disp_setting); 
        // docprint.document.open(); 

        // // printWindow.document.write('</head>');
        // docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:11px; font-family:arial; font-weight:normal; margin-left: 5%;">');          
        // docprint.document.write(content_vlue); 
        // docprint.document.close(); 
        // docprint.focus(); 
        }
</script>

</body>
</html>