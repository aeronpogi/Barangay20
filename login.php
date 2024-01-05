<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Barangay206 Mangement System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="img/new-logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="css/login.css"> -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition login-page">


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" >
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0" >
        <ul>
          <li><a class="nav-link scrollto active" href="index.php" >Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php">Services</a></li>
          <li><a class="nav-link scrollto " href="index.php">Officials</a></li>
          <li><a class="nav-link scrollto" href="index.php">Businesses</a></li>
          <li><a class="nav-link scrollto" href="index.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
        <a type="button" data-bs-toggle="modal" data-bs-target="#signin">SIGNUP</a>
        <a href="login.php">LOGIN</a>
   
      </div>

    </div>
</header>


    <div class="row">
    <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
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


            

  
    <div class="col-md-6">
   
        <div class="login-box">
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
            <?php if (isset($_SESSION['wronglogin'])) {
              ?>
            <div class="alert alert-warning text-center">
               <?php echo $_SESSION['wronglogin']; ?>
            </div>
            <?php }
            unset($_SESSION['wronglogin']);
            ?>


          <?php if (isset($_SESSION['error'])) {
              ?>
            <div class="alert alert-warning text-center">
               <?php echo $_SESSION['error']; ?>
            </div>
            <?php }
            unset($_SESSION['error']);
            ?>
       
           <?php if (isset($_SESSION['Deactivated'])) {
              ?>
            <div class="alert alert-warning text-center">
               <?php echo $_SESSION['Deactivated']; ?>
            </div>
            <?php }
            unset($_SESSION['Deactivated']);
            ?>
       


              <p class="login-box-msg">Sign in to start your session</p>
              <form action="resident/includes/login.inc.php" method="post">
                <div class="input-group mb-3">
                  <input type="email" class="form-control"  name="uid" placeholder="Username"required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="pwd" placeholder="password"required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div style="padding: 0 5px 15px !important">

                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Resident" id="flexCheckDefault"  name="radio"  checked />
                    <label class="form-check-label" for="flexCheckDefault">
                      Resident
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="Barangay" id="flexCheckChecked" name="radio"  /> 
                    <label class="form-check-label" for="flexCheckChecked">
                      Barangay
                    </label>
                  </div>
                </div>
               
                <button type="submit" class="btn btn-primary" name="submit" style="float: right">Sign In</button>
         
              </form>

             
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
