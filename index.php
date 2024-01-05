<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Barangay 206</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="img/new-logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">


</head>

<body>


  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#Businesses">Businesses</a></li>
          <li><a class="nav-link scrollto " href="#officials">Officials</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="header-social-links d-flex align-items-center">
    
        <a type="button" data-bs-toggle="modal" data-bs-target="#signin">SIGNUP</a>
        <a href="login.php">LOGIN</a>
   
      </div>

    </div>
  </header>


  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>E-<span>Barangay206</span></h1>
      <h2></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>


  <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">SIGNUP</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Please proceed to barangay hall to register an account.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           
          </div>
        </div>
      </div>
    </div>


  <main id="main">


  <section id="about" class="about" style="padding: 35px 0;">
      <div class="container">

      <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <img src="img/Untitled.png" class="img-fluid" alt="">
            <!-- <img src="img/newAbout.jpg" class="img-fluid" alt=""> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">

          <?php

              require_once 'resident/includes/dbh.inc.php';
              $query = mysqli_query($conn, "SELECT * FROM content");
            
              $row = mysqli_fetch_array($query);
            
              $mission = $row["mission"];
            
              $vision = $row["vission"];
              $aboutus = $row["aboutus"];
          ?>
            <p style="font-size: 16px; line-height: 2">
            <?php echo $aboutus;?>  
           </p>
          
        
            <div class="row icon-boxes">
              <div class="col-md-6">
              
                <h4>Mission</h4>
                <!-- <p style="font-size: 16px; color: #444444; ">With the guidance of the divine providence, multi-sectoral developments in the barangay aimed to be realized thru self-reliant, supportive citizens, efficient and effective public leaders who are collaborative to maintain a peaceful, orderly and progressive community.</p> -->
                <p style="font-size: 16px; color: #444444;line-height: 2 "><?php echo $mission;?></p>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
              
                <h4>Vision</h4>
                <!-- <p style="font-size: 16px; color: #444444">Envisions a Progressive, Healthy, Peaceful community, empowered constituents and collectively participating in decision making gearing towards good governance.</p> -->
                <p style="font-size: 16px; color: #444444; line-height: 2"><?php echo $vision;?></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    

    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Announcements</h2>
        </div>

        <?php 
                require_once 'resident/includes/dbh.inc.php';
                $sql = "SELECT * FROM news WHERE status='Publish'  ORDER BY id DESC ;";
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
                            
                        
                            <div class="card" style="margin: .3em 0; border-color: white; background-color: white; box-shadow: 0px 2px 15px rgb(12 1 1 / 10%);">
                                <!-- <div class="card-header">
                                  
                                </div> -->
                                <div class="card-body" style="padding: 1.5em 1em">
                                  <h5 class="card-title" style="font-weight: bold; font-size: 18px; "><?php echo $title;?></h5>
                                  <p class="card-text" style="font-size: 14px"><?php echo $description;?></p>

                                  <span style="color: #a9a6a6; font-size: 12px"><?php echo $time;?></span>
                                  
                                </div>
                            </div>
                            
                            <?php } 
                            
                            }?>


      </div>


    </section><!-- End Portfolio Section -->


    





    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
 
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-file-earmark"></i>
              <h4><a href="#">Barangay Clearance</a></h4>
              <p>This document is commonly required in processing legal and financial transactions in the locality.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-file-earmark"></i>
              <h4><a href="#">Business Clearance</a></h4>
              <p>One of the permits or documents required when registering a new business in the Philippines. </p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-file-earmark"></i>
              <h4><a href="#">Certificate of Indigency</a></h4>
              <p>Refers to the certification issued to individuals who are assessed to be indigent and eligible for appropriate assistance from other social welfare agencies.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
            <i class="bi bi-shop"></i>
              <h4><a href="#">Business</a></h4>
              <p>This service allows individuals to upload their business on this website. </p>
            </div>
          </div>
          <!-- <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-file-earmark"></i>
              <h4><a href="#">Complain</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4">
            <div class="icon-box">
              <i class="bi bi-file-earmark"></i>
              <h4><a href="#">Business</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->
        </div>
<br>
      </div>
    </section>


    




    <section id="Businesses" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Businesses</h2>
        </div>



        <div class="row portfolio-container">

        <?php 
                require_once 'resident/includes/dbh.inc.php';
                $sql = "SELECT * FROM business  where bstatus='Approved' ORDER BY id DESC ;";
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
                                      <img src="resident/businessImage/<?php echo $img;?>" alt="wew" style="width: 100%; "class="img-fluid" >
                                    </figure>
                                    <div class="portfolio-info" style="padding: 0 8px;">
                                      <h5 style="text-align: center; padding: 25px 0 3px; font-weight: bold"><?php echo $name;?></h5>
                                    </div>

                                  </a>
                                </div>
                              </div>


                              <div class="modal fade" id="business<?php echo $businessid;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">


                                      <!-- Columns are always 50% wide, on mobile and desktop -->

                                      <div class="container">
                                       
                                        <div class="row">
                                          <div class="col-sm">
                                            <img src="resident/businessImage/<?php echo $img;?>"alt="wew" class="img-fluid" >
                                            <div class="portfolio-info" style="padding: 0 8px; width: 100%">
                                                <h4 style="text-align: center; padding: 25px 0 3px; font-weight: bold"><?php echo $name;?></h4>
                                                <p style="color: #0b0909; margin-bottom: 15px;font-family: 'Poppins', sans-serif; font-weight: 300 !important; font-size: 14px; "><?php echo $description;?></p>
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
    </section>


    <section id="officials" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Officials</h2>
    
        </div>

        <div class="row">
            <?php 
                require_once 'resident/includes/dbh.inc.php';

                $sql = "SELECT * FROM brgy_account where role='2';";
                $result = mysqli_query($conn, $sql);
                

                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $fullname = $row["fullname"];
                        $position = $row["position"];
                        $staffImg = $row["image_picture"];

                        ?>


                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="margin: 8px 0">
                              <div class="member" style="width: 100%; height: 100%;">
                                <img src="admin/officialsimg/<?php echo $staffImg;?>" alt="" style=" object-fit: cover;    height: 220;
    width: 300px;">
                                <h4><?php echo $fullname;?></h4>
                                <span><?php echo $position;?></span>
                                <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                              </div>
                            </div>
                  
                  
                          
                        
                        
                        
                        <?php
                    }
                }

            ?>
        </div>

      </div>
    </section>

    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-5 justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Tondo, Manila, Metro Manila</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <!-- <form action="forms/contact.php" method="post"  class="php-email-form"> -->
            <form action="contact.php" method="post"  class="php-email-form">
            <!-- <form action="admin/sendEmails.php" method="post"  class="php-email-form"> -->
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

 
  <footer id="footer">

 

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Barangay206</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>