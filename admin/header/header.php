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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


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
                <li class="menu-item">
                  <a href="AMC_Customer.php" class="menu-link">
                    <div data-i18n="Text Divider">Only AMC Customer</div>
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
                  <a href="AddQueryHeads.php" class="menu-link">
                    <div data-i18n="Text Divider">Add Query Heads</div>
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
                        <div class="d-flex card-body justify-content-between align-items-center">
                          <h4 > Welcome <strong class="text-primary"><?php echo $_SESSION['adminName']; ?></strong> as a Admin</h4>


                          
                          <div class="dropdown" style="margin-right: 24px;">
                          <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                            Profile
                          </button>
                          
                          <div class="dropdown-menu">
  
                        
                        
                            <!-- Button to trigger the modal -->
<button type="button" class="dropdown-item" data-toggle="modal" data-target="#changePasswordModal">
  Change Password
</button>






<!-- <button class="dropdown-item" type="button"></button> -->
<button class="dropdown-item" type="button"><a href="./logout.php">Logout</a></button>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="changePasswordForm">
          <div class="form-group">
            <label for="currentPassword">Current Password</label>
            <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
          </div>
          <div class="form-group">
            <label for="newPassword">New Password</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm New Password</label>
            <input type="password" class="form-control" id="" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Changes</button>
      </div>
      <div id="message"></div>
    </div>
  </div>
</div>
                        
                
                
                
                   
        
    
                   
               
              
            <!-- </div> -->
            </div>
            </div>
            </div>
            

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

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



    <!-- Ajax for change password -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('#changePasswordForm').submit(function(e) {
    e.preventDefault(); // Prevent form submission

    // Get form values
    var oldPassword = $('#oldPassword').val();
    var newPassword = $('#newPassword').val();

    // Create data object
    var data = {
      oldPassword: oldPassword,
      newPassword: newPassword
    };

    // Send AJAX request
    $.ajax({
      type: 'POST',
      url: 'backend_changePassword.php',
      data: data,
      success: function(response) {
        $('#message').html(response);
      }
    });
  });
});
</script>
  </body>
</html>