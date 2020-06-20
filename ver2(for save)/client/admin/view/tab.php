<!-- Content Wrapper -->
    <div id="content-wrapper" class="content-wrapper">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <!-- Nav Item - 1 -->
            <li class=" dropdown alert-content">
              <a class="dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="glyphicon glyphicon-bell"></i>
                <!-- Counter - Alerts -->
                <span class="badges badge-danger badge-counter">3+</span>
                
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Thông báo
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
              </div>
            </li>
            <!-- Nav Item - User -->
            <li class=" dropdown users-li">
              <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tên admin ABC gì gì đó</span>
                <img class="img-profile rounded-circle" src="#">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid fluid-tab">
            <?php
                if(isset($_GET['src'])){
                    $src = $_GET['src'];
                }
                else{
                    $src = 'dashBoard';
                }
                switch ($src) {

                    case "userTable":
                        include (__DIR__ . "../Tab/User_table.php");
                        break;
                    case "adminTable":
                        include (__DIR__ . "../Tab/admin_table.php");
                        break;
                    case "productTable":
                        include (__DIR__ . "../Tab/product_Table.php");
                        break;
                    case "History":
                        include (__DIR__ . "../Tab/History_tab.php");
                        break;
                    default:
                        include (__DIR__ . "../Tab/DashBoard_Tab.php");
                        break;
                }
                
            ?>
        </div>

      </div>
      <!-- End  Main Content -->


    </div>
    <!-- End Content Wrapper -->