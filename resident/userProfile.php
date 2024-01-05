<?php 


session_start();
require_once 'includes/functions.inc.php';
require_once 'includes/dbh.inc.php';

if(empty($_SESSION['usersid']) || $_SESSION['usersid'] == ''){
    header("Location: ../login.php");
    die();
}

$id =  $_SESSION["usersid"];



$query = mysqli_query($conn, "SELECT * FROM user_account WHERE id ='$id'");

$row = mysqli_fetch_array($query);
            

if($row['image_picture'] =='null' ){
$profileImg = "user.png";
}else {
    $profileImg = $row['image_picture'];
}
$street = $row['street'];
$fullname = $row['ufullname'];
$contact = $row['ucontactno'];
$address = $row['address'];
$email = $row['uemail'];
$rbi = $row['urbi'];
$household = $row['uhouseholdno'];
$residentId = $row['residentId'];





?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../img/new-logo.png" />

    <link rel="stylesheet" href="css/user.css">

    <link rel="stylesheet" href="css/onlineApp.css">

    <link rel="stylesheet" href="css/edit-profile.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script> 


    

    
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="padding: 5px; width: 200px">
          <!-- <a class="navbar-brand brand-logo" href="index.html">e-Barangay206</a> -->
       
         <!-- BARANGAY 206 -->
         <img src="assets/images/new-logo.png" alt="" style="width: 40px; margin: 5px">
         <span style="font-size: 18px; font-weight: bold">BARANGAY 206</span>
          
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><p style="font-size: 18px; font-weight: bold">BARANGAY 206</p></a> -->
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <!-- <img src="assets/images/faces/face1.jpg" alt="image"> -->
                  <img src="Images/profileImages/<?php echo $profileImg;?>" alt="" style="object-fit: cover">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $fullname;?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/logout.inc.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                 
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>


          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <!-- <img src="assets/images/faces/face1.jpg" alt="profile"> -->
                  <img src="Images/profileImages/<?php echo $profileImg;?>" alt="profile" style="object-fit: cover">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">


                  <span class="font-weight-bold mb-2"><?php echo $fullname;?></span>
                  <span class="text-secondary text-small">Resident</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-home.php">
                <span class="menu-title" style="color: #3498db;">Dashboard</span>
                <i class="mdi mdi-home menu-icon" style="color: #3498db;"></i>
              </a>
            </li>

   

      
            <li class="nav-item">
              <a class="nav-link" href="business.php" style="display: flex; justify-content: space-between">
                <span class="menu-title" style="color: #3498db;">Business</span>
                <i class="fas fa-store-alt"  style="color: #3498db; float: right;"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="myApplication.php" style="display: flex; justify-content: space-between">
                <span class="menu-title" style="color: #3498db;">Documents</span>
                <i class="fas fa-file" style="color: #3498db; float: right;"></i>
              </a>
            </li>

            <div class="dropdown-divider"></div>

            <li class="nav-item" >
            <a class="nav-link" type="button" data-bs-target="#complaints" data-bs-toggle="modal">
                <span class="menu-title" style="color: #3498db;">Complaints</span>
              </a>
            </li> 




            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="includes/logout.inc.php" style="margin-left: 10px; font-weight: bold;">
            <i class="mdi mdi-logout me-2 text-primary"></i> SIGNOUT </a>
          </ul>
        </nav>
        <!-- partial -->



        
        
        
        
        <div class="main-panel" style="width: 100%">
          <main id="main" style="margin-bottom: 50px;">

       

       
      



                        <div class="form" style="padding: 65px 15px 25px; height: 100%;background-color: #ffffff;     background-color: #ffffff;box-shadow: 0px 0px 30px rgb(127 137 161 / 25%);border-color: white; margin: 15px; " >
        
                            <?php
                                    if (isset($_SESSION["changedProfile"])) {
                                    ?>
                                        
                                          <div class="alert alert-success" role="alert" style="margin: 15px 0; padding: 15px; background-color: #d4edda; color: #155724; border-color: #c3e6cb; text-align: center">
                                          <?php echo $_SESSION["changedProfile"];?>
                                          </div>


                                    
                                    
                                    <?php
                                    }
                                    unset($_SESSION["changedProfile"]);
                                
                                ?>

<?php
                                    if (isset($_SESSION["passwordChanged"])) {
                                    ?>
                                        
                                          <div class="alert alert-success" role="alert" style="margin: 15px 0; padding: 15px; background-color: #d4edda; color: #155724; border-color: #c3e6cb; text-align: center">
                                          <?php echo $_SESSION["passwordChanged"];?>
                                        </div>
                                        
                                        
                                        
                                        
                                        <?php
                                    }
                                    unset($_SESSION["passwordChanged"]);
                                    

                                    
                                    
                                    ?>


                          <?php
                            if (isset($_SESSION["typeerror"])) {
                            ?>
                            

                            <div class="alert alert-warning" role="alert" style="background: #de4c4c; border: 1px solid #de4c4c; color: white; text-align: center;">
                                <?php echo $_SESSION["typeerror"];?>
                                </div>
                            
                            <?php
                            }
                            unset($_SESSION["typeerror"]);
                        
                        ?>


                      

                              <form method="post" action="includes/edit.inc.php" enctype="multipart/form-data" id="personalInfo">

  
  
  
                              <div id="view">
                                <div class="form-row" style="padding: 25px 50px">
                                    <div class="form-group col-md-6" style="display: flex; justify-content: center; align-items: center;flex-direction: column">
                                      <img src="Images/profileImages/<?php echo $profileImg;?>" style="  display: block; width: 300px; height: 300px; margin: 10px 0; border-radius: 50%; margin-bottom: 55px; cursor: pointer; object-fit: cover;">
                                      <div style="margin: 0 25px;">
                                        <button type="button" class="btn btn-primary"  id="editbtn" onclick="editForm()">Edit</button>
                                        <button type="button" class="btn btn-primary"  data-bs-target="#modalPass" data-bs-toggle="modal"  style="background: black; color: white; border-color: none" >Change Password</button>
                                        
                                      </div>
                                    </div>
  
                                    
                                    <div class="form-group col-md-6" id="view" style="margin-top: 25px">
                                        <label for="RBI">RBI No. <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" id="RBI" value="<?php echo $rbi;?>"name="rbi" readonly >
                                        <br>
                                        
                                        <label for="Sex">Resident ID <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" value="<?php echo $residentId;?>" readonly >
                                        <br>
                                        <label for="Fullname">Resident Name <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" id="Fullname" value="<?php echo $fullname;?>" readonly name="fname" >
                                        <br>
                                        <label for="Household">Contact No. <i class="fas fa-lock"></i></label>
                                        <input type="tel" class="form-control" id="Household" value="<?php echo $contact?>" readonly name="contactno">
                                        <br>
                                        <label for="Sex">Address <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" id="Sex"  value="<?php echo $street;?>"name="sex" readonly >
                                        
                                        
                                        
                                      </div>
                              
                                    </div>

                                </div>

                                <div id="edit" style="display: none">
                                  
                                  <div class="form-row" style="padding: 25px 50px">
                                    <div class="form-group col-md-6" style="display: flex; justify-content: center; align-items: center;flex-direction: column">
                                      <div class="user-img">
                                          <img  src="Images/profileImages/<?php echo $profileImg;?>" id="profileDisplay" onclick="change()" style="display: block; width: 300px; height: 300px; margin: 10px 0; border-radius: 50%; margin-bottom: 55px; cursor: pointer; object-fit: cover;">
                                          <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImg" style="display: none;">
                                          <div class="icon" style="position: absolute; top: 47px; width: 35px;height: 35px; background: white;border-radius: 52%;display: flex;justify-content: center;align-items: center; border: 1px solid #e1e1e1">
                                            <i class="fas fa-edit"></i>
                                          </div>
                                        </div>
                                        <div style="margin: 0 25px;">
                                          <button type="button" class="btn btn-primary" onclick="cancel()">Cancel</button>
                                          <button type="submit" class="btn btn-primary" style="background: black; color: white; border-color: none" name="submit">Save</button>
                                        </div>
                                      </div>
                                      
                                      
                                      <div class="form-group col-md-6" id="view" style="margin-top: 25px">
                                        <label for="RBI">RBI No. <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" id="RBI" value="<?php echo $rbi;?>"name="rbi" readonly >
                                        <br>
                                        <label for="Sex">Resident ID <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" value="<?php echo $residentId;?>" readonly >
                                        <br>
                                        <label for="Fullname">Resident Name <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" id="Fullname" value="<?php echo $fullname;?>" readonly name="fname" >
                                        <br>
                                        <label for="Household">Contact No. <i class="fas fa-edit"></i></label>
                                        <input type="tel" class="form-control" id="Household" value="<?php echo $contact?>"  name="contactno">
                                        
                                        <br>
                                        <label for="Sex">Address <i class="fas fa-lock"></i></label>
                                        <input type="text" class="form-control" id="Sex"  value="<?php echo $street;?>"name="sex" readonly >
                                      </div>
                                      
                                    </div>
                                  </div>
                                  
                                </div>
                                
                                
                              </form>
                              
                              
                              <?php include 'modals/modalPassword.php';?>


                            

                     
                        
                        
                        
                      </div>





              </main><!-- End #main -->
          </div>





          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2022</span>
            </div>
          </footer>

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>

    <script src="../js/imgupload.js"></script>
    <!-- End custom js for this page -->
    <script src="../js/password.js"></script>
    
    <script>
           function editForm(){
            document.getElementById('edit').style.display = "block";
            document.getElementById('view').style.display = "none";
           }

       

           function cancel(){
            document.getElementById('edit').style.display = "none";
            document.getElementById('view').style.display = "block";
            document.getElementById('personalInfo').style.display = "block";
           }


          
    </script>
   
  </body>
</html>