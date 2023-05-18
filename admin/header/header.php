<?php
include '../../DB_config.php';
if ($_SESSION['username'] == "") {
  header("location:../logout.php");
}

?>


<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content= "device-width", initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale="1.0"
    />

    <title>SKS Web App Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/app.png" sizes="16x16"/>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo d-flex justify-content-center mb-1">
		  <img src="../assets/img/app.png" alt="" style="width: 144px;">
			</div>
              
        


          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            
            <li class="menu-item active">
              <a href="dashboard.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

		

			


           

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Modules</span>
            </li>
            

            <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Extended UI">Customer Section</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="All_Customers.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Web Customer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="Add_Customer.php" class="menu-link">
                    <div data-i18n="Text Divider">Add Customer</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-wallet-alt"></i>
                <div data-i18n="Extended UI">AMC Section</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="./AMC_Collection.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">AMC Collection</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Extended UI">Query Section</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="PendingQueries.php" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Pending Queries</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
              </ul>
            </li>
		</ul>

	</aside>
           
           
        <!-- / Menu -->
  	
        <!-- Layout container -->
        <div class="layout-page">
          
          <div class="content-wrapper">
           

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="mb-4 order-0">
                  <div class="card mb-4">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-12">
                        <div class="d-flex card-body justify-content-between">
                          <h4 > Welcome <strong class="text-primary"><?php echo $_SESSION['adminName']; ?></strong> as a Admin</h4>


                          <a class="menu-item menu-toggle hide-arrow" style="width: 12px;"><i class='bx bx-menu'></i>
                        
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                          <a class="dropdown-item" href="#">
                           <span class="align-middle">My Profile</span>
                          </a>
                          </li>

                        </ul>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                
                
                
                   
        
    
                   
               
              
            </div>
            

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>