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
            <h1 class="m-0">FINANCE REPORT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Finance Report</li>
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
        <div class="row">

            <div class="col-12 col-sm-6 col-md-4">
                <!-- <a href="javascript:Clickheretoprint()" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a> -->
                <button type="button" id="financePrint" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></button>
                <!-- <a href="rbiReportExport.php"  class="btn btn-primary btn-sm"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></a> -->
                <button type="button" id="financeExport" class="btn btn-primary btn-sm" style="color: white"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></button>
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
                                <input type="date" id="from" name="from"class="form-control dateFilter" aria-describedby="passwordHelpInline">
                            </div>
                           

                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">To</label>
                            </div>

                            <div class="col-auto">
                                <input type="date" id="to"name="to" class="form-control dateFilter" aria-describedby="passwordHelpInline">
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
                    <th width="10%" style="text-align: left;">PERMIT TYPE </th>
                    <th width="10%" style="text-align: left;">REQUESTOR</th>
                    <th width="10%" style="text-align: left;">DATE</th>
                    <th width="10%" style="text-align: left;">FEE</th>
   
                 
                  </thead>
                  <tbody id="body">
                  <?php

                  $page = "rbi_report";
                  $i = 1;
            
                      # code...
                      //   $query = mysqli_query($conn, "SELECT * from rbi_tenant ") or die(mysqli_error($conn));
                        $query = mysqli_query($conn, "SELECT * from application where fee !=' '") or die(mysqli_error($conn));
                            
                        while($row = mysqli_fetch_array($query)){
                        $id = $row['id'];
                        ?>
                        <tr>
                        <td><?php echo $row['permit_type']; ?></td>
        
                        <td>
                        <?php echo $row['uname']; ?>
                        </td>
                        <td  width="">
                            <?php echo $row['udate_approve']; ?>
                        </td>
                    
                            <td>
                            <?php echo $row['fee']; ?>
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
                
                url: "report_financeAjax.php",
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

       
          });

          $("#financeExport").on('click', function(){

                var from = $('#from').val();
                var to = $('#to').val();
                var permitType = $('#filterSearch').val();

                window.location.href='report_financeExport.php?from=' + from + '&to=' +to;

             


         });

         $("#financePrint").on('click', function(){

            var from = $('#from').val();
                var to = $('#to').val();

             window.open(
                  'report_financePrint.php?from=' + from + '&to=' +to,
                  '_blank' // <- This is what makes it open in a new window.
                  );



        });


       
        


        

        })

       
</script>

