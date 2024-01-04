<?php include 'connect.php'; ?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" >
      <img src="image/new-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;  " >
      <span class="brand-text font-weight-light">Barangay206 System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-2 mb-3 d-flex">
        <div class="image">
          <img src="./officialsimg/<?php echo $img;?>" class="img-circle elevation-2 mt-2" alt="User Image" style="width: 50px;
    height: 50px;
    object-fit: cover;">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $username; ?></a>
              <?php if($position=='Admin') { ?>
               <div class="user-role" style="color: grey">
                Administrator
              </div>
              <?php } ?>

              <?php if($position=='Secretary') { ?>
               <div class="user-role" style="color: grey">
                Secretary
              </div>
              <?php } ?>

              <?php if($position=='Chairman') { ?>
               <div class="user-role" style="color: grey">
               Chairman
              </div>
              <?php } ?>

              <?php if($position=='Sk Chairman') { ?>
               <div class="user-role" style="color: grey">
               Sk Chairman
              </div>
              <?php } ?>

               <?php if($position=='Kagawad') { ?>
               <div class="user-role" style="color: grey">
               Kagawad
              </div>
              <?php } ?>

              <?php if($position=='Treasurer') { ?>
               <div class="user-role" style="color: grey">
               Treasurer
              </div>
              <?php } ?>
              <?php if($role=='3') { ?>
               <div class="user-role" style="color: grey">
                Barangay Staff
              </div>
              <?php } ?>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="fas fa-tachometer-alt nav-icon"></i>
                  <p>Dashboard</p>
                </a>
            </li>
          <?php if($position == 'Admin' || $position == 'Secretary' || $position == 'Chairman' || $position == 'Sk Chairman') { ?>

          <li class="nav-item">
            <a href="rbiManagement.php" class="nav-link">
            <!-- <a href="rbi.php" class="nav-link"> -->
              <i class="far fa-users nav-icon"></i>
              <p>RBI Management</p>
            </a>
          </li>
         <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-sticky-note"></i>
              <p>
                Pending Request
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="barangay_clearance.php" class="nav-link">
              <!-- <i class="nav-icon far fa-sticky-note"></i> -->
              <p style="margin-left: 2em">
                Barangay Clearance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="business_clearance.php" class="nav-link">
              <!-- <i class="nav-icon far fa-sticky-note"></i> -->
              <p style="margin-left: 2em">
                Business Clearance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="barangay_indigency.php" class="nav-link">
              <!-- <i class="nav-icon far fa-sticky-note"></i> -->
              <p style="margin-left: 2em">
                Certificate of Indigency
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="travel_authorization.php" class="nav-link">
              <i class="nav-icon far fa-sticky-note"></i>
              <p style="margin-left: 2em">
                Travel Authorization
              </p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="businesses_request.php" class="nav-link">
              <!-- <i class="nav-icon far fa-sticky-note"></i> -->
              <p style="margin-left: 2em">
                Businesses
              </p>
            </a>
          </li>


        </ul>
      </li>
       <?php } ?>
     <?php if($position == 'Admin' || $position == 'Secretary' || $position == 'Chairman'|| $position == 'Sk Chairman') { ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Content Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="news.php" class="nav-link">
                  <!-- <i class="fa fa-newspaper nav-icon"></i> -->
                  <p style="margin-left: 2em">Announcements</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="aboutUscontent.php" class="nav-link">
                  <!-- <i class="fa fa-newspaper nav-icon"></i> -->
                  <p style="margin-left: 2em">About Us</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="contentDoucmet.php" class="nav-link">
                  <!-- <i class="fa fa-newspaper nav-icon"></i> -->
                  <p style="margin-left: 2em">Document Fee</p>
                </a>
              </li>

              
             
              <li class="nav-item">
                <a href="purok.php" class="nav-link">
                <p style="margin-left: 2em">Purok</p>
                </a>
              </li>
              
            </ul>
          </li>
        <?php } ?>

        <?php if($position == 'Secretary' || $position == 'Chairman' || $position == 'Sk Chairman') { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="residents.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Resident Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="staff.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Barangay Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kagawad.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Barangay Official</p>
                </a>
              </li>

              <!-- <li class="nav-item">
                <a href="admin.php" class="nav-link">
                
                  <p style="margin-left: 2em">Admins</p>
                </a>
              </li> -->
              
            </ul>
          </li>
        <?php } ?>

        <?php if($position == 'Admin') { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="residents.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Resident Account</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="staff.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Barangay Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kagawad.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Barangay Official</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <!-- <i class="far fa-user nav-icon"></i> -->
                  <p style="margin-left: 2em">Admin</p>
                </a>
              </li>
              
            </ul>
          </li>
        <?php } ?>
        
        <?php if($position == 'Kagawad' || $position == 'Treasurer' || $position == 'Sk Chairman' || $role == '3') { ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Content Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="news.php" class="nav-link">
                  <!-- <i class="fa fa-newspaper nav-icon"></i> -->
                  <p style="margin-left: 2em">Announcements</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="aboutUscontent.php" class="nav-link">
                  <!-- <i class="fa fa-newspaper nav-icon"></i> -->
                  <p style="margin-left: 2em">About Us</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="contentDoucmet.php" class="nav-link">
                  <!-- <i class="fa fa-newspaper nav-icon"></i> -->
                  <p style="margin-left: 2em">Document Fee</p>
                </a>
              </li>

              
             
              <li class="nav-item">
                <a href="purok.php" class="nav-link">
                <p style="margin-left: 2em">Purok</p>
                </a>
              </li>
              
            </ul>
          </li>
        <?php } ?>

        
   

          <?php if($position == 'Admin' || $position == 'Secretary' || $position == 'Chairman' || $position =='Kagawad' || $position == 'Sk Chairman' || $position == 'Treasurer') { ?>

          <!-- <li class="nav-item">
            <a href="rbi.php" class="nav-link">
              <i class="far fa-users nav-icon"></i>
              <p>RBI Management</p>
            </a>
          </li> -->

          <li class="nav-item">
                <a href="blotter.php" class="nav-link">
                  <i class="fa fa-copy nav-icon"></i>
                  <p>Blotter</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="complaint.php" class="nav-link">
                  <i class="fa fa-file nav-icon"></i>
                  <!-- <i class="fa-solid fa-message"></i> -->
                  <p>Complaint</p>
                </a>
          </li>
           <!-- <li class="nav-item">
                <a href="rbi.php" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>RBI</p>
                </a>
              </li> -->
        <?php } ?>

             <?php if($position == 'Admin' || $position == 'Secretary' || $position == 'Chairman' || $position == 'Sk Chairman') { ?>
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Archive
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                

                  <li class="nav-item">
                    <a href="archive_application.php" class="nav-link">
                      <p style="margin-left: 2em">Application</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="archive_businesess.php" class="nav-link">
                      <p style="margin-left: 2em">Businesses</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="archive_rbi.php" class="nav-link">
                      <p style="margin-left: 2em">RBI</p>
                    </a>
                  </li>

              
      
              
             </ul>
              </li> -->
        <?php } ?>

        

        <?php if($position == 'Admin' || $position == 'Secretary' || $position == 'Chairman' || $position == 'Sk Chairman') { ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <!-- <a href="report.php" class="nav-link"> -->
            <i class="nav-icon fas fa-folder-open"></i>
              <p>
              Report     <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <!-- <a href="barangay_report.php?d1=0&d2=0" class="nav-link"> -->
              <a href="residentReport.php" class="nav-link">
                  <p style="margin-left: 2em">Resident Report</p>
                  <!-- <p style="margin-left: 2em">Barangay Clearance</p> -->
                </a>
              </li>
              <li class="nav-item">
              <!-- <a href="business_report.php?d1=0&d2=0" class="nav-link"> -->
              <a href="report_cetificate.php?from=0&to=0" class="nav-link">
                  <!-- <p style="margin-left: 2em">Business Clearance</p> -->
                  <p style="margin-left: 2em">Isuance Report</p>
                </a>
              </li>
              <li class="nav-item">
              <!-- <a href="indigency_report.php?d1=0&d2=0" class="nav-link"> -->
              <a href="report_incident.php" class="nav-link">
                  <!-- <p style="margin-left: 2em">Indigency Clearance</p> -->
                  <p style="margin-left: 2em">Incident Report</p>
                </a>
              </li>
              <li class="nav-item">
              <!-- <a href="indigency_report.php?d1=0&d2=0" class="nav-link"> -->
              <a href="report_finance.php" class="nav-link">
                  <!-- <p style="margin-left: 2em">Indigency Clearance</p> -->
                  <p style="margin-left: 2em">Finance Report</p>
                </a>
              </li>
            

           
              
            </ul>
          </li>
        <?php } ?>

 


        <?php if($position == 'Admin' || $position == 'Secretary' || $position == 'Chairman' || $position == 'Sk Chairman') { ?>
          <li class="nav-item">
                <a href="activityLog.php" class="nav-link">
                  <i class="fa fa-history nav-icon"></i>
                  <p>Activity Log</p>
                </a>
          </li>
        <?php } ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>