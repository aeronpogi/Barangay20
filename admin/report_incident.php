<?php
include 'include/header.php';
include 'include/sidebar.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">INCIDENT REPORT</h1>
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-infos elevation-1"><i class="fas fa-people-carry"></i></span> -->
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-exclamation-circle "></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> TOTAL CASES</b></span>
                <span class="info-box-number" id='totalCount'>
                  <?php
                       
                      // $query = mysqli_query($conn,"SELECT id FROM rbi ");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT blotter_id FROM blotter where blotter_id !=' ' ");
                      $row2 = mysqli_num_rows($query2);

                      // echo $row+$row2;
                      echo $row2;
                      
                     ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-primarsy elevation-1"><i class="fas fa-male"></i></span> -->
              <span class="info-box-icon bg-primary eleprimary1"><i class="fas fa-calendar-alt "></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> CRIMINAL CASE</b></span>
                <span class="info-box-number" id="criminalCount">
               <?php
                  $query2 = mysqli_query($conn,"SELECT blotter_id FROM blotter WHERE blotter_id != ' ' and natureCases='Criminal Case'");
                  $row2 = mysqli_num_rows($query2);
                  echo $row2;
              
               ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-dangesr elevation-1"><i class="fas fa-female"></i></span> -->
              <span class="info-box-icon bg-primary eleprimary1"><i class="fas fa-calendar-alt "></i></span>
<!--  -->

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> CIVIL CASE</b></span>
                <span class="info-box-number" id="civiCount">
                <?php
                  $query2 = mysqli_query($conn,"SELECT blotter_id FROM blotter WHERE blotter_id != ' ' and natureCases='Civil Case'");
                  $row2 = mysqli_num_rows($query2);

                  // echo $row+$row2;
                  echo $row2;
               ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-dangesr elevation-1"><i class="fas fa-female"></i></span> -->
              <span class="info-box-icon bg-primary eleprimary1"><i class="fas fa-calendar-alt "></i></span>
<!--  -->

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> OTHERS</b></span>
                <span class="info-box-number" id="othersCount">
                <?php
                  $query2 = mysqli_query($conn,"SELECT blotter_id FROM blotter WHERE blotter_id != ' ' and natureCases='Others'");
                  $row2 = mysqli_num_rows($query2);

                  // echo $row+$row2;
                  echo $row2;
               ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    

        
          <!-- /.col -->

          <!-- /.col -->

     

  
        </div>
        <!-- /.row -->

        

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <br>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-4">
                <!-- <a href="javascript:Clickheretoprint()" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a> -->
                <button type="button" id="incidentPrint" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></button>
                <!-- <a href="rbiReportExport.php"  class="btn btn-primary btn-sm"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></a> -->
                <button type="button" id="incidentExport" class="btn btn-primary btn-sm" style="color: white"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></button>
                <!-- <button id="button" value="csv">Export</button> -->

                <a href="javascript:void(0)" id="dlbtn" style="display: none;">
                    <button type="button" id="mine">Export</button>
                </a>
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
                    <form action="" >
                        <div class="row g-3 align-items-center">
                       

             
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
                                <button type="button"  class="btn btn-primary btn-sm preview" id="preview"><i class="fa fa-search" aria-hidden="true"></i>Preview</button>
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
                    <th width="10%" style="text-align: left;">Blotter ID </th>
                    <th width="10%" style="text-align: left;">Date Filed</th>
                    <th width="10%" style="text-align: left;">Case Nature</th>
                    <th width="15%" style="text-align: left;">Coplainant Name</th>
                    <th width="10%" style="text-align: left;">Status</th>
                 
                  </thead>
                  <tbody id="body">
                  <?php

                  $page = "rbi_report";
                  $i = 1;
            
                      # code...
                      //   $query = mysqli_query($conn, "SELECT * from rbi_tenant ") or die(mysqli_error($conn));
                        $query = mysqli_query($conn, "SELECT * from blotter where blotter_id !=' ' ") or die(mysqli_error($conn));
                            
                        while($row = mysqli_fetch_array($query)){
                        $id = $row['id'];
                        ?>
                        <tr>
                        <td><?php echo $row['blotter_id']; ?></td>
        
                        <td>
                          <?php $date = $row['date']; ?>
                          <?php
                              echo date('m-d-Y',strtotime($date));
                          ?>
                        </td>
                        <td  width="">
                            <?php echo $row['natureCases']; ?>
                        </td>
                    
                           

                        <td><?php echo $row['complainant']?></td>

                        <td>
                            <?php echo $row['status']; ?>
                            
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

   
        $(".preview").on('click', function(){
            const from = $('#from').val();
            const to = $('#to').val();

            $.ajax({
                
                url: "report_incidentAjax.php",
                type: "POST",
                //   data: "filterSearch=" + filterSearch,
                data: {data2: from, data3: to },
                beforeSend:function(){
                    $('#body').html("<td colspan=11>Working...</td>")
                  },
                success: function(data){
                    $("#body").html(data);
                }
            });
            // $.ajax({
            //     url: "report_incidentCriminal.php",
            //     type: "POST",
            //     //   data: "filterSearch=" + filterSearch,
            //     data: {data2: from, data3: to },
            //     success: function(data){
            //         $("#criminalCount").html(data);
            //     }
            //     });

            // });
                $.ajax({
                
                url: "report_incidentCriminal.php",
                type: "POST",
                //   data: "filterSearch=" + filterSearch,
                data: {data2: from, data3: to },
                success: function(data){
                    $("#criminalCount").html(data);
                }
            });

            $.ajax({
                
                url: "report_incidentTotal.php",
                type: "POST",
                //   data: "filterSearch=" + filterSearch,
                data: {data2: from, data3: to },
                success: function(data){
                    $("#totalCount").html(data);
                }
            });

            $.ajax({
                
                url: "report_incidentCivil.php",
                type: "POST",
                //   data: "filterSearch=" + filterSearch,
                data: {data2: from, data3: to },
                success: function(data){
                    $("#civiCount").html(data);
                }
            });

            $.ajax({
                
                url: "report_incidentOthers.php",
                type: "POST",
                //   data: "filterSearch=" + filterSearch,
                data: {data2: from, data3: to },
                success: function(data){
                    $("#othersCount").html(data);
                }
            });


       
          });

          $("#incidentExport").on('click', function(){

            var from = $('#from').val();
            var to = $('#to').val();
           
            window.location.href='report_incidentExport.php?from=' + from + '&to=' +to;

          
        });

        $("#incidentPrint").on('click', function(){

        var from = $('#from').val();
        var to = $('#to').val();

        // window.location.href='report_incidentPrint.php?from=' + from + '&to=' +to, '_blank';

        // window.open('report_incidentPrint.php?from=' + from + '&to=' +to, '_blank');

            window.open(
            'report_incidentPrint.php?from=' + from + '&to=' +to,
            '_blank' // <- This is what makes it open in a new window.
            );
        });


        

        })

       
</script>

