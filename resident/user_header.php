<?php 

session_start();
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

if(empty($_SESSION['usersid']) || $_SESSION['usersid'] == ''){
    header("Location: ../login.php");
    die();
}

$id =  $_SESSION["usersid"];
$sql = "SELECT * FROM user_account WHERE id ='$id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $profileImg;

        if($row['image_picture'] =='null' ){
          $profileImg = "user.png";
          }else {
              $profileImg = $row['image_picture'];
          }

          
          $fullname = $row['ufullname'];
          $uemail = $row['uemail'];
          $residentId = $row['residentId'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="1800; url=../login.php">
    <title>My Application</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="../img/new-logo.png" />

    <!-- <link rel="stylesheet" href="css/user.css"> -->

    <link rel="stylesheet" href="css/onlineApp.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="css/edit-profile.css"> -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    

    
  </head>
  <body>
    <div class="container-scroller">

      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="border-bottom: 3px solid #4c6085;">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="padding: 5px; width: 200px">
          <!-- <a class="navbar-brand brand-logo" href="index.html">e-Barangay206</a> -->
       
         <!-- BARANGAY 206 -->
         <img src="assets/images/new-logo.png" alt="" style="width: 40px; margin: 5px">
         <span style="font-size: 18px; font-weight: bold; text-shadow: 2px 2px #e6e6e6; letter-spacing: 1px"">BARANGAY 206</span>
          
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
                  <img src="images/profileImages/<?php echo $profileImg;?>" alt="" style="object-fit: cover">
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
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar" style="  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="userProfile.php" class="nav-link">
                <div class="nav-profile-image">
                <img src="Images/profileImages/<?php echo $profileImg;?>" alt="profile"style="object-fit: cover" >
                  <span class="login-status online"></span>
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

            <!-- <span style="margin-left: 35px; color: rgb(172, 172, 172); font-weight: 400; letter-spacing: 1px;"> Documents</span> -->

            <!-- <li class="nav-item">
              <a class="nav-link" type="button" data-bs-target="#modalDocu" data-bs-toggle="modal" style="display: flex; justify-content: space-between">
                <span class="menu-title" style="color: #3498db;">Documents</span>
              </a>
            </li> -->
            <li class="nav-item" >
            <a href="complaints.php"class="nav-link" type="button" data-bs-target="#complaints" data-bs-toggle="modal">
                <span class="menu-title" style="color: #3498db;">Complaints</span>
              </a>
            </li> 


           
<!-- 
            <li class="nav-item">
            <a class="nav-link" type="button" data-bs-target="#bsnclearance" data-bs-toggle="modal">
                <span class="menu-title"style="color: #3498db;" >Business Clearance</span>
              </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" type="button" data-bs-target="#indigency" data-bs-toggle="modal">
                <span class="menu-title" style="color: #3498db;">Certificate of Indigency</span>
              </a>
            </li>

            <li class="nav-item" >
            <a class="nav-link" type="button" data-bs-target="#travel" data-bs-toggle="modal">
                <span class="menu-title" style="color: #3498db;">Travel authorization</span>
              </a>
            </li>

            <li class="nav-item" >
            <a class="nav-link" type="button" data-bs-target="#complaints" data-bs-toggle="modal">
                <span class="menu-title" style="color: #3498db;">Complaints</span>
              </a>
            </li> -->



            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="includes/logout.inc.php" style="margin-left: 10px; font-weight: bold;">
            <i class="mdi mdi-logout me-2 text-primary"></i> SIGNOUT </a>
          </ul>
        </nav>