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
            <h1 class="m-0">RESIDENT REPORT</h1>
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
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-infos elevation-1"><i class="fas fa-people-carry"></i></span> -->
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> TOTAL RESIDENTS</b></span>
                <span class="info-box-number" id='populationCount'>
                  <?php
                       
                      // $query = mysqli_query($conn,"SELECT id FROM rbi ");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant where status='Active'");
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
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-primarsy elevation-1"><i class="fas fa-male"></i></span> -->
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> MALE</b></span>
                <span class="info-box-number" id="maleCount">
               <?php
                  $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE gender='male' and status='Active'");
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

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-dangesr elevation-1"><i class="fas fa-female"></i></span> -->
              <span class="info-box-icon bg-danger eleprimary1"><i class="fas fa-female"></i></span>
<!--  -->

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b> FEMALE</b></span>
                <span class="info-box-number" id="femaleCount">
                <?php
                  $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE gender='female' and status='Active'");
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
                <!-- <a href="residentGeneralPrint.php" id="print" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a> -->
                <button type="button" id="print" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></button>
                <!-- <button type="button" id="print" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></button> -->
                <a href="rbiReportExport.php"  class="btn btn-primary btn-sm"><span><i class="fa fa-download" aria-hidden="true"></i> Export</span></a>
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
                                <label for="inputPassword6" class="col-form-label">Filter</label>
                            </div>
                            <div class="col-auto">
                                <!-- <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"> -->
                                <select name="" id="filterSearch" class="form-control">
                                    <option value="1">General Report</option>
                                    <option value="Civil Status">Civil Status</option>
                                    <option value="3">Education</option>
                                    <option value="4">Voter</option>
                                    <option value="5">Deceased</option>
                                    <option value="6">Age</option>
                                    <option value="7">Employment</option>
                                </select>
                            </div>

                            <div class="col-auto">
                                <!-- <label for="inputPassword6" class="col-form-label">Selec Category</label> -->
                            </div>
                    

                            <div class="col-auto">
                                <!-- <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"> -->
                                <select name="" id="filterMatch" class="form-control" style="width: 350px" disabled >
                                    <option value="5" selected >Select Category</option>
                                 
                                </select>
                            </div>
                           

                            <!-- <div class="col-auto" id="civil" style="display: none">
                              
                            </div> -->

                            
                        </div>

                    
                    </form>
                </div>
            </div>
       

        </div>
        
        <div class="row" style="margin-top: -15px" id="table">

          <!-- <div id='header'>BARANGAY</div> -->
          
          <div class="col-12 col-sm-6 col-md-12">
            <div class="info-box mb-3">
              <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10%" style="text-align: left;">RBI </th>
                    <th width="10%" style="text-align: left;">Family ID</th>
                    <th width="10%" style="text-align: left;">Full Name</th>
                    <th width="10%" style="text-align: left;">Address</th>
                    <th width="15%" style="text-align: left;">Birth Place</th>
                    <th width="15%" style="text-align: left;">Birthdate</th>
                    <th width="10%" style="text-align: left;">Sex</th>
                    <th width="10%" style="text-align: left;">Civil Status</th>
                    <th width="15%" style="text-align: left;">Tenant/Owner</th>
                    <th width="10%" style="text-align: left;">Occupation</th>
                    <th width="10%" style="text-align: left;">Age</th>
                  </tr>
                  </thead>
                  <tbody id="body">
                  <?php

                  $page = "rbi_report";
                  $i = 1;
            
                      # code...
                      //   $query = mysqli_query($conn, "SELECT * from rbi_tenant ") or die(mysqli_error($conn));
                        $query = mysqli_query($conn, "SELECT * from rbi_tenant") or die(mysqli_error($conn));
                            
                        while($row = mysqli_fetch_array($query)){
                        $id = $row['id'];
                        $birtdate = $row['birth_date']
                        ?>
                        <tr>
                        <td><?php echo $row['rbi_id']; ?></td>
        
                        <td>
                        <?php echo $row['rbi_id'].'-'; ?><?php echo $row['family_no']; ?>
                        </td>
                        <td  width="">
                            <?php echo $row['full_name']; ?>
                        </td>
                    
                            <td>
                            <?php echo $row['street']; ?>
                            </td>

                            <td width="">
                            <?php echo $row['birth_place']; ?>
                            </td> 
                            <td>
                            <?php echo $birtdate; ?>
                            </td>
                            <td width="">
                            <?php echo $row['gender']; ?>
                            </td> 
                            <td width="">
                            <?php echo $row['civil_status']; ?>
                            </td> 
                        <td width="">
                            <?php echo $row['tenantOwner']; ?>
                            </td> 
                            <td width="">
                            <?php echo $row['occupation']; ?>
                            </td> 

                            <td width="">
                            <?php echo $row['age']; ?>
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

<script src="js/printThis.js"></script>


<script>
      $(document).ready(function(){
     
  
   
     
        $("#filterSearch").on('change', function(){
            var filterSearch = $(this).val();
            var x = $("filterMatch");


            if(filterSearch == "1") {

              $("#filterMatch").attr('disabled','disabled');
                $.ajax({
                  url: "report_ajax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
                  beforeSend:function(){
                    $('#body').html("<td colspan=11>Working...</td>")
                  },
                  success: function(data){
                    $("#body").html(data);
                  }
                });
            }else if (filterSearch == "5") {

              $("#filterMatch").attr('disabled','disabled');
                $.ajax({
                  url: "report_ajax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
                  beforeSend:function(){
                    $('#body').html("<td colspan=11>Working...</td>")
                  },
                  success: function(data){
                    $("#body").html(data);
                  }
                });

                $("#filterMatch").attr('disabled','disabled');
                $.ajax({
                  url: "report_populationDAjax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
               
                  success: function(data){
                    $("#populationCount").html(data);
                  }
                });

                $("#filterMatch").attr('disabled','disabled');
                $.ajax({
                  url: "report_populationMAjax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
               
                  success: function(data){
                    $("#maleCount").html(data);
                  }
                });

                $("#filterMatch").attr('disabled','disabled');
                $.ajax({
                  url: "report_populationFAjax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
               
                  success: function(data){
                    $("#femaleCount").html(data);
                  }
                });
            }else if (filterSearch == "7") {


              $("#filterMatch").removeAttr('disabled');
                $.ajax({
                  url: "report_ajax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
                  beforeSend:function(){
                    $('#body').html("<td colspan=11>Working...</td>")
                  },
                  success: function(data){
                    $("#filterMatch").html(data);
                  }
                });
            }else {

              $("#filterMatch").removeAttr('disabled');

                $.ajax({
                  url: "report_ajax.php",
                  type: "POST",
                  data: "filterSearch=" + filterSearch,
                  beforeSend:function(){
                    $('#body').html("<td colspan=11>Working...</td>")
                  },
                  success: function(data){
                    $("#filterMatch").html(data);
                  }
                });
            }

          });
                

        $("#filterMatch").on('change', function(){
            var filterMatch = $(this).val();

            $.ajax({
                url: "report_populationAjax.php",
                type: "POST",
                data: "filterMatch=" + filterMatch,
                success: function(data){
                $("#populationCount").html(data);
                // $("#body").html(data);
                }
            });


            $.ajax({
                url: "report_DemoMaleajax.php",
                type: "POST",
                data: "filterMatch=" + filterMatch,
                success: function(data){
                $("#maleCount").html(data);
                // $("#body").html(data);
                }
            });

            $.ajax({
                url: "report_DemoFemaleajax.php",
                type: "POST",
                data: "filterMatch=" + filterMatch,
                success: function(data){
                $("#femaleCount").html(data);
                // $("#body").html(data);
                }
            });

            $.ajax({
                url: "report_ajax.php",
                type: "POST",
                data: "filterMatch=" + filterMatch,
                success: function(data){
                // $("#maleCount").html(data);
                $("#body").html(data);
                }
            });

            // $.ajax({
            //     url: "report_DemoMalePerecentAjax.php",
            //     type: "POST",
            //     data: "filterMatch=" + filterMatch,
            //     success: function(data){
            //     // $("#maleCount").html(data);
            //     $("#malePercent").html(data);
            //     }
            // });

           
        });

  
        $("#print").on('click', function(){

          window.open(
            'residentGeneralPrint.php',
            '_blank' // <- This is what makes it open in a new window.
            );
      
        })



        })

       
</script>

