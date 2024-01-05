<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="ctp_logo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Automotive Services</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php echo $username ?>
           </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
         <!--  <li class="nav-item">
            <a href="person_management.php" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Person Management
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="service.php" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mechanic.php" class="nav-link">
              <i class="nav-icon fas fa-list-ol"></i>
              <p>
                Mechanics
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="appointment.php" class="nav-link">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                Appointment
              </p>
            </a>
          </li>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>