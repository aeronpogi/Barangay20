<?php
 include('include/connect.php');

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


    
    <div class="card-body" style="padding:20px 50px 50px 50px;">

    <div style="margin: 50px 0">
        <a a href="javascript:Clickheretoprint()" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a>
    </div>
    
                     <div class="table-responsive">
                           <div class="content" id="content">
                 
                    <center>
                     <div class="header">
                    <div class="box logo">
                        <img src="img/Barangay.svg" alt="" width="100" style="float: left"> 
                    </div>
                    <div class="box logo" style="margin-right: 60px">
                        <img src="img/lungsod.png" alt="" width="100" style="float: right; ">
                    </div>
                    <div class="box txt">
                        <h3>Republic of the Philippines</h3>
                        <h2>OFFICE OF THE </h2>
                        <h2>BARANGAY CHAIRMAN</h2>
                        <h3 style="margin-right: 65px">BARANGAY 206, ZONE 19, DISCRICT 11, MANILA</h3>
                    </div>
                  <br>
                    <h2 class="title" style="margin-right: 65px">General Report</h2>
                </div>
                </center>
                <br>
                    <table id="" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th width="10%" style="text-align: left;">RBI No.</th>
                        <th width="10%" style="text-align: left;">Permit Type</th>
                        <th width="23%" style="text-align: left;">Full Name</th>
                        <th width="19%" style="text-align: left;">Purpose of Request</th>
                        <th width="18%" style="text-align: left;">Date </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
    
                      $page = "clearance";
                      $i = 1;
                      $from = $_GET['from'];
                      $to = $_GET['to'];
                          # code...
                          $query = mysqli_query($conn, "SELECT * from application where  udate_approve BETWEEN '$from' AND '$to'; ") or die(mysqli_error($conn));
                      
                          if($query->num_rows > 0){ 
                            while($row = mysqli_fetch_array($query)){
                              $id = $row['id'];
                              ?>
                                  <tr>
                                    <td><?php echo $row['urbi']; ?></td>
                                    <td><?php echo $row['permit_type']; ?></td>
                                  <td>
                                      <?php echo $row['uname']; ?>
                                  </td>
                                  <td >
                                      <?php echo $row['upurpose']; ?>
                                    </td>
                            
                                    <td>
                                    <?php $date = $row['udate']; ?>
                                        <?php
                                            echo date('m-d-Y',strtotime($date));
                                        ?>
                                    </td>
                                
                                  
                                  </tr>
                              <?php
                            }
                          }else {
                            ?>
                              <tr>
                                <td colspan='5'>No records found</td>
                              </tr>
                            <?php
                          }
                         
                    ?>
                      
                      </tbody>
                     
                    </table>

                  
                  </div>
                </div>

                <script>
                    function Clickheretoprint()
                    { 
                    var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
                        disp_setting+="scrollbars=yes,width=1100px, height=1000px, left=150, top=25"; 
                    var content_vlue = document.getElementById("content").innerHTML; 
                    
                    var docprint=window.open("","",disp_setting); 
                    docprint.document.open(); 
                   
                    // printWindow.document.write('</head>');
                    docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:11px; font-family:arial; font-weight:normal; margin-left: 5%;">');          
                    docprint.document.write(content_vlue); 
                    docprint.document.close(); 
                    docprint.focus(); 
                    }
                </script>

                <!-- <script type="text/javascript">
                    function Clickheretoprint() {
                        var printWindow = window.open('', '', 'width=900px');
                        printWindow.document.write('<html><head><title>Table Contents</title>');
                
                        //Print the Table CSS.
                        var table_style = document.getElementById("table_style").innerHTML;
                        printWindow.document.write('<style type = "text/css">');
                        printWindow.document.write(table_style);
                        printWindow.document.write('</style>');
                        printWindow.document.write('</head>');
                
                        //Print the DIV contents i.e. the HTML Table.
                        printWindow.document.write('<body>');
                        var divContents = document.getElementById("content").innerHTML;
                        printWindow.document.write(divContents);
                        printWindow.document.write('</body>');
                
                        printWindow.document.write('</html>');
                        printWindow.document.close();
                        printWindow.print();
                    }
                </script> -->
</body>
</html>

