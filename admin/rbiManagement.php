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
            <h1>Resident Barangay Inhabitant</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Resident_Barangay_Inhabitant</li>
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
                <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addUser"  onclick="addRbi()"><i class="fa fa-plus-circle"></i>
                     RBI 

                  
                </button>

              
              </div>
               <?php include_once("rbiAddModal.php"); ?>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php if (isset($_SESSION['error'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['error']);
                  ?>

                <?php if (isset($_SESSION['success'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['success']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['success']);
                  ?>

                <?php if (isset($_SESSION["rbiError"])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION["rbiError"]; ?>
                  </div>
                  <?php }
                  unset($_SESSION["rbiError"]);
                  ?>

                    <div class="buttons" style="margin: 5px 0; position: relative; display: flex; ">
                        <input type="text" placeholder="Search"  id="rbisearchFilterValue" class="form-control" style="  margin: 0px; padding: 0 8px; width: 100%; outline: none; height: 42px; border-radius: 5px; ">
                        <!-- <i class="fa fa-search" aria-hidden="true" style="position: absolute; top: 18px; left: 15px; color: gray" id="icon"></i> -->
                        <button type="submit" id="searchSubmit" style=" position: absolute; border-radius: 5px;right: 0px;z-index: 2;border: none;top: 5px;height: 32px;width: 100px;cursor: pointer;color: white;background-color: #1e90ff;transform: translateX(-5px); outline: none">Search</button>
                    </div>
                    
                    <!-- </div> -->
                    <!-- <div id="rbiCon"> -->

               
             
                <!-- <table id="example1" class="table table-bordered table-striped"> -->
                <table id="rbiCon" class="table table-bordered table-striped">
                  <!-- <div style="display: flex; justify-content: flex-end; margin: 5px 0">   
                    <input type="text" placeholder="Search..." style="border: 1px solid #dedede; padding: 6px;border-radius: 3px;margin: 0 0 5px;outline: none;" id="searchFilter">
                  </div> -->

                  <!-- <table id="" class="table table-bordered table-striped"> -->
                      
                        <thead>
                          <tr>
                              <th style="width: 35%">RBI No.</th>
                              <th style="width: 35%">Family </th>
                              <!-- <th>Household Head</th> -->
                              <!-- <th>Street</th> -->
                              <th>Action</th>
                            </tr>
                       </thead>
                        <!-- <div id="rbiCon"> -->
                    <tbody>
                    <?php
  
                    $page = "rbi";
                    $i = 1;
                        $query = mysqli_query($conn, "select distinct rbi_id from rbi_tenant ") or die(mysqli_error($conn));
                        while($row = mysqli_fetch_array($query)){
                            $id = $row['rbi_id'];
                            // $fullname = $row['full_name'];
                            // $street = $row['streetno'];
                            
  
                            $noOffamily = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE rbi_id='$id' and rnumber='1'  ORDER BY id");
                            $fam = mysqli_num_rows($noOffamily);
  
                            // $names = mysqli_query($conn,"SELECT * FROM rbi_tenant WHERE rbi_id='$id' ")or die(mysqli_error($conn));
                            // $row = mysqli_fetch_array($names);
                            // $fullname = $row["full_name"];
                            // $street = $row["street"];
                            
                            // $fullname = mysqli_num_rows($names);
  

                        // $query = mysqli_query($conn, "select * from rbi where rnumber ='1';") or die(mysqli_error($conn));
                        // while($row = mysqli_fetch_array($query)){
                        //     $id = $row['rbiID'];
                        //     $fullname = $row['fullName'];
                        //     $street = $row['street'];
  
                        //     $noOffamily = mysqli_query($conn,"SELECT rbiID FROM rbi WHERE rbiID='$id'");
                        //     $fam = mysqli_num_rows($noOffamily);
  
                            // $names = mysqli_query($conn,"SELECT * FROM rbi_tenant WHERE rbi_id='$id' ")or die(mysqli_error($conn));
                            // $row = mysqli_fetch_array($names);
                            // $fullname = $row["full_name"];
                            // $street = $row["streetno"];
                            
                          
  
  
                            
                          ?>
                          <tr>
                            <td>
                              <?php echo $id; ?>
                            </td>
                            <td>
                              <?php echo $fam;?>
                            </td>
                      
                          
                            
                          
                            <td>
                              <div class="btn-group">
                          
                              <a href="rbiMember.php?id=<?php echo $id; ?>" type="button" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>  Family
                              </a>
  
                              </div>
                            </td>
                          </tr>
                          <?php
                        // include("deleteModal.php");
                        // include("rbiEditModal.php");
                        // include("rbiMemberFamilyEditModal.php");
                        // include("rbiSearch.php");
                        
                         
                      }?>
                    
                    </tbody>
                    
                  </table>
                <!-- </div> -->
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

