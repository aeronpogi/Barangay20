<?php 

session_start();
require_once 'includes/dbh.inc.php';

$id =  $_SESSION["usersid"];
$sql = "SELECT * FROM user_account WHERE id ='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $profileImg;

        if($row['image_picture'] =='NULL' ){
          $profileImg = "userdefault.png";
          }else {
              $profileImg = $row['image_picture'];
          }

          
          $fullname = $row['ufullname'];
          $contact = $row['ucontactno'];
          $address = $row['address'];
          $email = $row['uemail'];
          $rbi = $row['urbi'];

    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
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
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <link rel="stylesheet" href="css/user.css">

    <link rel="stylesheet" href="css/onlineApp.css">

    <link rel="stylesheet" href="css/edit-profile.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

    
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <!-- <a class="navbar-brand brand-logo" href="index.html">e-Barangay206</a> -->
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/new-logo.png" alt="logo" style="width: 100%; height: 100%;"></a>
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
                  <img src="profileImages/<?php echo $profileImg;?>" alt="">
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
                  <img src="profileImages/<?php echo $profileImg;?>" alt="profile">
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
              <a class="nav-link" href="#officials">
                <span class="menu-title" style="color: #3498db;">Officials</span>
                <i class="mdi mdi-home menu-icon" style="color: #3498db;"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Businesses">
                <span class="menu-title" style="color: #3498db;">Businesses</span>
                <i class="mdi mdi-home menu-icon" style="color: #3498db;"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="myApplication.php">
                <span class="menu-title" style="color: #3498db;">My Application</span>
                <i class="mdi mdi-home menu-icon" style="color: #3498db;"></i>
              </a>
            </li>

            <div class="dropdown-divider"></div>

            <li class="nav-item">
              <a class="nav-link" href="userProfile.php">
                <span class="menu-title" style="color: #3498db;">Profile</span>
                <!-- <i class="bi bi-file-earmark"></i> -->
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="changepassword.php">
                <span class="menu-title" style="color: #3498db;">Change Password</span>
                <!-- <i class="bi bi-file-earmark"></i> -->
              </a>
            </li>




            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="includes/logout.inc.php" style="margin-left: 10px; font-weight: bold;">
            <i class="mdi mdi-logout me-2 text-primary"></i> SIGNOUT </a>
          </ul>
        </nav>
        <!-- partial -->



        
        <div class="main-panel">

          <main id="main">

       


                    <div class="wrapper" style="margin-bottom: 50px; height: 100vh" >


                        <div class="form" style="padding: 15px 25px; height: 100%">
                            <form action="includes/password.inc.php"  method="post">
        
                            <div class="form-group">
                                
                            </div>
 
        

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
                                    if (isset($_SESSION["wrongpassword"])) {
                                    ?>
                                    
                                        <div class="alert alert-danger" role="alert" style="margin: 15px 0; padding: 15px;     color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb; text-align: center">
                                        <?php echo $_SESSION["wrongpassword"];?>
                                        </div>
                                    
                                    <?php
                                    }
                                    unset($_SESSION["wrongpassword"]);
                                
                                ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Old Password</label>
                                    <input type="password"  class="form-control" aria-describedby="passwordHelpInline" name="oldpwd" required>
                                </div>
        
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" aria-describedby="passwordHelpInline" name="newpwd" required id="newpwd" onkeyup='check()'> 
                                </div>
        
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Confirm new password</label>
                                    <input type="password" class="form-control" aria-describedby="emailHelp" name="newpwdrepeat" required id="newpwdrepeat"  onkeyup='check()' >
                                </div>


                                <div id="passwordStrength" class="strength0"></div>
                                              <div id="pswd_info" style="margin-top: 5px;">
                                                      <strong>Strong Password Tips:</strong>
                                                      <ul>
                                                              <li class="maxLength" >At least 6 characters</li>
                                                              <li class="oneNumber" >At least one number</li>
                                                              <li class="upCase" >At least one uppercase letter</li>
                                                              <li class="oneSpecial">At least one special character</li>
                                                              <li class="pwdmatch">Password Matched</li>
                                                      </ul>
                                              </div><!-- END pswd_info -->

                                <button type="submit" id="btn_sbmt" class="btn btn-primary"  name="submit" disabled="disabled">Submit</button>
                            </form>
                        </div>


                    </div>
                        



        </main><!-- End #main -->


          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
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

    <script src="../js/password.js"></script>
    <script src="../js/imgupload.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- End custom js for this page -->
  </body>
</html>