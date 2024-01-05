<?php
include('include/header.php');
include('include/sidebar.php');
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Travel authorization Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Travel_authorization_Report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                
                <div class="card-header">
                  
                   <form action="barangay_report.php" method="get">
                  <div class="row">
                  <div class="form-group col-sm-3">
                  <label style="">FROM:</label> <span style="color:red;">*</span> 
                  <input type="date" name="d1" class="form-control" style="font-size: 14px">
                  </div>
                  <div class="form-group col-sm-3">
                   <label style="">TO:</label> <span style="color:red;">*</span> <input type="date" name="d2" class="form-control" value="" style="font-size: 14px">
                  </div>
                  <div class="form-group col-sm-3" style="top:36px">
                  <button class="btn btn-primary btn-sm" type="submit"> <i class="fa fa-search"> </i> Search</button>
                  </div>
                  <div class="form-group col-sm-3" style="top:36px">
                   <a href="javascript:Clickheretoprint()" style="float: right;" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a>
                    </div>
                </div>
                </form>
                </div> 
              
              <!-- /.card-header -->
              <div class="card-body">
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
                <h2 class="title" style="margin-right: 65px">Barangay Clearance Report</h2>
            </div>
            </center>
            <br>
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%" style="text-align: left;">RBI No.</th>
                    <th width="23%" style="text-align: left;">Full Name</th>
                    <th width="19%" style="text-align: left;">Purpose of Request</th>
                    <th width="18%" style="text-align: left;">Date Request</th>
                    <th style="text-align: left;">Date Approve</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "clearance";
                  $i = 1;
                  $d1 = $_GET['d1'];
                  $d2 = $_GET['d2'];
                      # code...
                      $query = mysqli_query($conn, "SELECT * from application where permit_type = 'Travel Authorization' AND ustatus = 'Approved' order by udate_approve desc ") or die(mysqli_error($conn));
                  
                    while($row = mysqli_fetch_array($query)){
                    $id = $row['id'];
                  ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                  <td>
                      <?php echo $row['uname']; ?>
                  </td>
                  <td  width="20%">
                      <?php echo $row['upurpose']; ?>
                    </td>
            
                    <td>
                      <?php echo $row['udate']; ?>
                    </td>
                    <td width="20%">
                      <?php echo $row['udate_approve']; ?>
                    </td> 
                   
                  </tr>
                  <?php
             
                } ?>
                  
                  </tbody>
                 
                </table>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <!--ALL TARGET MODAL-->
    
       
      </div>
  <!-- /.content-wrapper -->
 <?php include('include/footer.php') ?>

 <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=1100px, height=1000px, left=150, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size:11px; font-family:arial; font-weight:normal; margin-left: 5%;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
