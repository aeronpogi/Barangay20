<?php
include 'include/header.php';
include 'include/sidebar.php';

$from = $_GET['from'];
$to = $_GET['to'];
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ISUANCE REPORT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Resident Report</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
       
       <div class="col-lg-4 col-4" >
         <!-- small box -->
         <div class="small-box bg-info">
           <div class="inner">
             <h3> 
                <?php 
                   $query = mysqli_query($conn,"SELECT id FROM application where permit_type='BarangayClearance' AND ustatus='Approved'");
                   $row = mysqli_num_rows($query);

                   echo $row;
                  ?>
                  </h3>

             <p>Total Barangay Clearance</p>
           </div>
           <div class="icon">
             <i class="far fa-sticky-note"></i>
           </div>
          
   
         </div>
       </div>

       <div class="col-lg-4 col-4" >
         <!-- small box -->
         <div class="small-box bg-info">
           <div class="inner">
             <h3> 
                <?php 
                   $query = mysqli_query($conn,"SELECT id FROM application where permit_type='BusinessClearance' AND ustatus='Approved'");
                   $row = mysqli_num_rows($query);

                   echo $row;
                  ?>
                  </h3>

             <p>Total Business Clearance</p>
           </div>
           <div class="icon">
             <i class="far fa-sticky-note"></i>
           </div>
          
   
         </div>
       </div>

       <div class="col-lg-4 col-4" >
         <!-- small box -->
         <div class="small-box bg-info">
           <div class="inner">
             <h3> 
                <?php 
                   $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Indigency' AND ustatus='Approved'");
                   $row = mysqli_num_rows($query);

                   echo $row;
                  ?>
                  </h3>

             <p>Total Indigency Clearance</p>
           </div>
           <div class="icon">
             <i class="far fa-sticky-note"></i>
           </div>
          
   
         </div>
       </div>

        

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <br>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-4">
            <button type="button" id="insuancePrint" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></button>
                <!-- <a href="rbiReportExport.php"  class="btn btn-primary btn-sm"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></a> -->
                <button type="button" id="insuanceExport" class="btn btn-primary btn-sm" style="color: white"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></button>
            </div>
        </div>

          


  

    
      </div><!--/. container-fluid -->
    </section>
    
    <br>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-12 col-sm-6 col-md-12">
                <div class="info-box mb-3">
                    <!-- <form action="" method="get" > -->
                    <form action=""  >
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">Permit Type</label>
                            </div>
                            <div class="col-auto">
                                <!-- <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"> -->
                                <select name="permitType" id="filterSearch" class="form-control">
                                    <option value="General">All</option>
                                    <option value="BarangayClearance">Barangay Clearance</option>
                                    <option value="BusinessClearance">Business Clearance</option>
                                    <option value="Indigency">Indigency</option>
                                </select>
                            </div>

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">From</label>
                            </div>
                    

                            <div class="col-auto">
                                <input type="date" id="from" name="from"class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                           

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">To</label>
                            </div>

                            <div class="col-auto">
                                <input type="date" id="to"name="to" class="form-control" aria-describedby="passwordHelpInline">
                            </div>

                            <div class="col-auto">
                                <button type="button"  class="btn btn-primary btn-sm" id="preview"><i class="fa fa-search" aria-hidden="true"></i>Preview</button>
                                <!-- <button type="submit"  class="btn btn-primary btn-sm" id="preview"><i class="fa fa-search" aria-hidden="true"></i>Preview</button> -->
                            </div>

                            <!-- <div class="col-auto" id="civil" style="display: none">
                              
                            </div> -->

                            
                        </div>

                    
                    </form>
                </div>
            </div>
       

        </div>
        
        <div class="row" style="margin-top: -15px">

            <div class="col-12 col-sm-6 col-md-12">
                <div class="info-box mb-3">
                <table id="" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%" style="text-align: left;">RBI No.</th>
                    <th width="23%" style="text-align: left;">Full Name</th>
                    <th width="19%" style="text-align: left;">Purpose of Request</th>
                    <th width="18%" style="text-align: left;">Date Request</th>
                  </tr>
                  </thead>
                  <tbody id="body">
                  <?php

                  $page = "rbi_report";
                  $i = 1;

                //   $from = $_GET['from'];
                //   $to = $_GET['to'];
            
                      # code...
                        $query = mysqli_query($conn, "SELECT * from application where ustatus='Approved' ") or die(mysqli_error($conn));
                        // $query = mysqli_query($conn, "SELECT * from application where permit_type='Barangay Clearance' and udate_approve BETWEEN '$from' and '$to'") or die(mysqli_error($conn));
                            
                        while($row = mysqli_fetch_array($query)){
                        $id = $row['id'];
                        ?>
                           <tr>
                                <td><?php echo $row['urbi']; ?></td>
                              <td>
                                  <?php echo $row['uname']; ?>
                              </td>
                              <td  width="20%">
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
                    
                        } ?>
                  
                  </tbody>
                 
                </table>
                </div>
            </div>
        </div>

          


  

    
      </div><!--/. container-fluid -->
    </section>

    
    <!-- /.content -->
     <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php  include 'include/footer.php'; ?>





<script>
      $(document).ready(function(){

   
        $("#preview").on('click', function(){
        var from = $('#from').val();
        var to = $('#to').val();
        var permitType = $('#filterSearch').val();


            $.ajax({
              url: "report_cetificateajax.php",
              type: "POST",
            //   data: "filterSearch=" + filterSearch,
              data: { data1: permitType, data2: from, data3: to },
              beforeSend:function(){
                    $('#body').html("<td colspan=11>Working...</td>")
                  },
              success: function(data){
                $("#body").html(data);
              }
            });
     


        });
                

        $("#insuanceExport").on('click', function(){

            var from = $('#from').val();
            var to = $('#to').val();
            var permitType = $('#filterSearch').val();

            if(permitType == 'BarangayClearance'){
              window.location.href='report_cetificateExport.php?type='+ permitType + '&from=' + from + '&to=' +to;
            }
            if(permitType == 'BusinessClearance'){

              window.location.href='report_cetificateExportbusiness.php?type='+ permitType + '&from=' + from + '&to=' +to;

            }
            if(permitType == 'Indigency'){
              window.location.href='report_cetificateExportindigency.php?type='+ permitType + '&from=' + from + '&to=' +to;
            }

            if(permitType == 'General'){
              window.location.href='report_cetificateExportAll.php?type='+ permitType + '&from=' + from + '&to=' +to;
            }


        });

        $("#insuancePrint").on('click', function(){

            var from = $('#from').val();
            var to = $('#to').val();
            var permitType = $('#filterSearch').val();

            if(permitType == 'General'){

            window.open(
            'report_certificateAllPrint.php?from=' + from + '&to=' +to,
            '_blank' // <- This is what makes it open in a new window.
            );
          }

            if(permitType == 'BarangayClearance'){

              window.open(
              'report_certificatePrint.php?from=' + from + '&to=' +to,
              '_blank' // <- This is what makes it open in a new window.
              );

            }
            if(permitType == 'BusinessClearance'){
                window.open(
                'report_certificateBusinessPrint.php?from=' + from + '&to=' +to,
                '_blank' // <- This is what makes it open in a new window.
                );

            }
            if(permitType == 'Indigency'){
              window.open(
                'report_certificateIndigencyPrint.php?from=' + from + '&to=' +to,
                '_blank' // <- This is what makes it open in a new window.
                );

            }
        })


        

        })

       
</script>