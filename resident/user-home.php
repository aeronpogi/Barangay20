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
          $residentId = $row['residentId'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="1800; url=../login.php">
    <title>Barangay206</title>
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

    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="css/onlineApp.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    
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
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="box-shadow: 0px 2px 15px rgb(68 134 161 / 10%); border-bottom: 3px solid #4c6085;">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="padding: 5px; width: 200px">
          <!-- <a class="navbar-brand brand-logo" href="index.html">e-Barangay206</a> -->
       
         <!-- BARANGAY 206 -->
         <img src="assets/images/new-logo.png" alt="" style="width: 40px; margin: 5px">
         <span style="font-size: 18px; font-weight: bold; text-shadow: 2px 2px #e6e6e6; letter-spacing: 1px">BARANGAY 206 </span>
          
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
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <!-- <img src="assets/images/faces/face1.jpg" alt="image"> -->
                  <img src="Images/profileImages/<?php echo $profileImg;?>" alt="profile"style="object-fit: cover" >
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
              <a href="userProfile.php" class="nav-link">
                <div class="nav-profile-image">
                  <!-- <img src="assets/images/faces/face1.jpg" alt="profile"> -->
                  <img src="Images/profileImages/<?php echo $profileImg;?>" alt="profile"style="object-fit: cover" >
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

            <!-- <span style="margin-left: 35px; color: rgb(172, 172, 172); font-weight: 400; letter-spacing: 1px;"> Documents</span> -->

            <!-- <li class="nav-item">
              <a class="nav-link" type="button" data-bs-target="#modalDocu" data-bs-toggle="modal" style="display: flex; justify-content: space-between">
                <span class="menu-title" style="color: #3498db;">Documents</span>
              </a>
            </li> -->

            <!-- <li class="nav-item">
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

            <li class="nav-item" >
            <a href="complaints.php"class="nav-link" >
                <span class="menu-title" style="color: #3498db;">Complaints</span>
              </a>
            </li> 



            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="includes/logout.inc.php" style="margin-left: 10px; font-weight: bold;">
            <i class="mdi mdi-logout me-2 text-primary"></i> SIGNOUT </a>
          </ul>
        </nav>



        
        <div class="main-panel">

          <main id="main" style="padding: 0 18px">

          <?php 
            // include 'modals/Modal_barangayclearance.php';
            // include 'modals/Modal_businessclearance.php';
            // include 'modals/Modal_indigency.php';
            // include 'modals/Modal_travel.php';
            include 'modals/Modal_complaints.php';
            include 'modals/Modal_documents.php';
            ?>





  
<!-- 
      <section  style="margin-top: -25px" class="containers">
       <div class="row mb-4">
		
       <div class="col-xl-3 col-md-6 mb-4" >
          <div class="card h-100"  style="border-color: white; background-color: white; box-shadow: 0px 2px 15px rgb(12 1 1 / 10%);">
          <div class="card-header" style="background: #4c6085; padding: 14px; color: white; font-weight: bold; font-family: 'Poppins', sans-serif; display: flex; justify-content: space-between">Barangay Clearance   <i class="far fa-sticky-note"></i></div>
            <div class="card-body" style="display: flex; justify-content: space-around; align-items: center;padding: 8px; font-size: 26px;  ">
              0
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4" >
          <div class="card h-100"  style="border-color: white; background-color: white; box-shadow: 0px 2px 15px rgb(12 1 1 / 10%);">
          <div class="card-header" style="background: #4c6085; padding: 14px; color: white; font-weight: bold; font-family: 'Poppins', sans-serif; display: flex; justify-content: space-between">Business Clearance   <i class="far fa-sticky-note"></i></div>
            <div class="card-body" style="display: flex; justify-content: space-around; align-items: center;padding: 8px; font-size: 26px;  ">
              0
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4" >
          <div class="card h-100"  style="border-color: white; background-color: white; box-shadow: 0px 2px 15px rgb(12 1 1 / 10%);">
          <div class="card-header" style="background: #4c6085; padding: 14px; color: white; font-weight: bold; font-family: 'Poppins', sans-serif; display: flex; justify-content: space-between">Indigency  <i class="far fa-sticky-note"></i></div>
            <div class="card-body" style="display: flex; justify-content: space-around; align-items: center;padding: 8px; font-size: 26px;  ">
              0
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4" >
          <div class="card h-100"  style="border-color: white; background-color: white; box-shadow: 0px 2px 15px rgb(12 1 1 / 10%);">
          <div class="card-header" style="background: #4c6085; padding: 14px; color: white; font-weight: bold; font-family: 'Poppins', sans-serif; display: flex; justify-content: space-between">Travel authorization  <i class="far fa-sticky-note"></i></div>
            <div class="card-body" style="display: flex; justify-content: space-around; align-items: center;padding: 8px; font-size: 26px;  ">
              0
            </div>
          </div>
        </div>
    
   
       </div>
      </section> -->

      <section>
      <div class="row mb-4" style="margin-top: -50px;">
            <div class="col-xl-6 col-lg-6 mb-4">
							<div class="card" style="border-color: white; background-color: white; box-shadow: 0px 4px 15px 4px rgb(12 1 1 / 10%);">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: white;padding: 0 0 0 10px;">
									<h6 class="m-0 font-weight-bold " style="color: #4c6085;">Barangay Officials</h6>
								</div>
								<div class="table-responsive">
									<table class="table align-items-center table-flush">

          
										<thead class="thead-light">

               
											<tr>
												<th style="white-space: nowrap; overflow: hidden;">Position</th>
												<th>Name</th>
												<th style="white-space: nowrap; overflow: hidden;">Contact Number</th>
											</tr>
										</thead>
										<tbody>

                    <?php 
                    require_once 'includes/dbh.inc.php';

                      $sql = "SELECT * FROM brgy_account where role='2' order by position desc;";
                      $result = mysqli_query($conn, $sql);
                      

                      if(mysqli_num_rows($result) > 0) {
                          while($row = mysqli_fetch_assoc($result)) {
                              $fullname = $row["fullname"];
                              $position = $row["position"];
                              $contact = $row["contact_no"];

                    ?>
                      <tr>
												<td><?php echo $position;?></td>
												<td style="white-space: nowrap; overflow: hidden;"><?php echo $fullname;?> </td>
												<td><?php echo $contact;?></td>
											</tr>
										
                  </tbody>

                  <?php }   
                            
                          }?>
									</table>
								</div>
							</div>
						</div>
						
						
				    <div class="col-xl-6 col-lg-6 mb-4">
              <div class="card" style="border-color: white; background-color: white; box-shadow: 0px 4px 15px 4px rgb(12 1 1 / 10%);">
                <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between" style="background: #4c6085">
                  <h6 class="m-0  " style="color:white;">Recent Announcements</h6>
                </div>


                
              <?php 
                 require_once 'includes/dbh.inc.php';
                $sql = "SELECT * FROM news where status='Publish' ORDER BY id DESC LIMIT 2;";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                            $newsImg = $row["news_img"];
                            $filetype = $row["file_type"]; 
                            $newsId = $row["id"];
                            $description = $row["news_descri"];
                            $title = $row["news_title"];
                            $time = $row["time_upload"];
                            ?>

                  <div>
                    <div class="customer-message align-items-center" style="padding: 15px;">
                      <a class="">
                        <h5 class="card-title" style="font-weight: bold; font-size: 14px; "><?php echo $title;?></h5>
                        <span class="card-text" style="font-size: 13px"><?php echo $description;?></span><br>
                        <span style="color: #a9a6a6; font-size: 11px"><?php echo $time;?></span>
                      </a>
                      
                    </div>

                    <div class="dropdown-divider"></div>
      
                    <?php }   
                            
                          }?>

                    
                                              
                  
                </div>
              </div>
            </div>
				</div>
      </section>




 

    <div class="dropdown-divider" style="margin-top: -100px"></div>


      

    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h3 style="text-align: left;">BUSINESSES</h3>

        </div>



        <div class="row portfolio-container">

        <?php 
                require_once 'includes/dbh.inc.php';
                $sql = "SELECT * FROM business  where bstatus='Approved' ORDER BY id asc ;";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                            $img = $row["businessImg"];
                            $businessid = $row["ID"];
                            $description = $row["description"];
                            $name = $row["businessName"];
                            $contact = $row["businessContactno"];
                            $location = $row["location"];
                            $email = $row["businessEmail"];
                            ?>


                              <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" >
                                <div class="portfolio-wrap">
                                  <a type="button" type="button" data-bs-target="#business<?php echo $businessid;?>" data-bs-toggle="modal">
                                    <figure style="display: flex; align-items: center;">
                                      <img src="businessImage/<?php echo $img;?>" alt="wew" style="width: 100%; display: flex; align-items: center" class="img-fluid">
                                    </figure>
                                    <div class="portfolio-info" style="padding: 0 8px;">
                                      <h5 style="text-align: center; padding: 25px 0 3px; font-weight: bold"><?php echo $name;?></h5>
                                    </div>

                                  </a>
                                </div>
                              </div>


                              <div class="modal fade" id="business<?php echo $businessid;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">


                                      <!-- Columns are always 50% wide, on mobile and desktop -->

                                      <div class="container">
                                       
                                        <div class="row">
                                          <div class="col-sm">
                                            <img src="businessImage/<?php echo $img;?>"alt="wew" class="img-fluid" >
                                            <div class="portfolio-info" style="padding: 0 8px; width: 100%">
                                                <h4 style="text-align: center; padding: 25px 0 3px; font-weight: bold"><?php echo $name;?></h4>
                                                <p style="color: #0b0909; margin-bottom: 15px;font-family: 'Poppins', sans-serif; font-weight: 300 !important; font-size: 14px; text-indent: 20px; text-align: justify"><?php echo $description;?></p>
                                                <br>
                                                <p style="color: #0b0909; font-family: 'Poppins', sans-serif; font-weight: 300 !important; font-size: 12px "><i class="fa-solid fa-phone" style="margin-right: 5px;"></i> <?php echo $contact;?></p>
                                                <p style="color: #0b0909; font-family: 'Poppins', sans-serif; font-weight: 300 !important; font-size: 12px "><i class="fa-solid fa-envelope" style="margin-right: 5px;"></i><?php echo $email;?></p>
                                                <p style="color: #0b0909; font-family: 'Poppins', sans-serif; font-weight: 300 !important; font-size: 12px"><i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i><?php $location = str_replace("+", " ", $location); echo $location;?></p>
                                            </div>
                                          </div>
                                          <div class="col-sm">
                                            <div  class="portfolio-info" style="padding: 0 8px; height: 400px">
                                              <iframe src="https://maps.google.com/maps?q=<?php echo $location;?>&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                            </div>
                                          </div>
                                        </div>
                                      </div>

                                   </div>
                              </div>

                              
                                  </div>
                              </div>

            
                                                                                  

                            <?php

                            
                    }
                }
                            
            ?>

  


        </div>

      </div>


    </section><!-- End Portfolio Section -->
      
      
        </main><!-- End #main -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright 2022</span>
            </div>
          </footer>

          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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
    <script src="../js/modals.js"></script>




    <!-- End custom js for this page -->


    <script>
            $(document).ready(function(){

                $('#permitType').bind('change', function(event) {

                  var i= $('#permitType').val();

                  if(i=="1") // equal to a selection option
                    {
                        $('#brgyClearance').show(300);
                        $('#businessClearance').hide(300); // hide the first one
                        $('#indingency').hide(300); // show the other one
                        $('#travelauthorization').hide(300); // show the other one
                    }
                  else if(i=="2")
                    {
                      $('#brgyClearance').hide(300); // hide the first one
                      $('#businessClearance').show(300); // show the other one
                      $('#indingency').hide(300); // show the other one
                      $('#travelauthorization').hide(300); // show the other one

                    }
                  else if(i=="3")
                  {
                    $('#brgyClearance').hide(300); // hide the first one
                    $('#businessClearance').hide(300); // hide the first one
                    $('#indingency').show(300); // show the other one
                    $('#travelauthorization').hide(300); // show the other one

                  }else if(i=="4"){
                    $('#brgyClearance').hide(300); // hide the first one
                    $('#businessClearance').hide(300); // hide the first one
                    $('#indingency').hide(300); // show the other one
                    $('#travelauthorization').show(300); // show the other one
                    
                  }
                });
                          


             

                $("input[name$='pickup']").click(function() {

                    if($("#walkin").is(":checked")) {
                      $("#paymentForm").hide(300);
                      $(".fee").text("Fee: Php <?php echo $barangayclearanceFee;?>");
                    
                    }else {
                      $("#paymentForm").show(300);
                      $(".fee").text("Fee: Php <?php echo $delivery;?>");
                    }
                });

                $("input[name$='pickupIndigency']").click(function() {

                  if($(".walkinIndigency").is(":checked")) {
                    $(".paymentForm").hide(300);
                    $(".fee").text("Fee: Php <?php echo $indigency;?>");

                  }else {
                    $(".paymentForm").show(300);
                    $(".fee").text("Fee: Php <?php echo $delivery;?>");
                  }
                });

                $("input[name$='pickupTravel']").click(function() {

                  if($(".walkinTravel").is(":checked")) {
                    $(".paymentForm").hide(300);
                    $(".fee").text("Fee: Php 0");

                  }else {
                    $(".paymentForm").show(300);
                    $(".fee").text("Fee: Php 20");
                  }
                });


              
              
              })
          </script>
    
  </body>
</html>