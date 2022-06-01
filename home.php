<?php require("lib/head.php");
require("lib/common_function.php");
require ("db_sql/db_config.php");
require("pages/category/require/item_category_class.php");
?>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" style="background-color: #D7D1C2">
      <div class="layout-container" >
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background-image:
                linear-gradient(to bottom, #fff3cd,aliceblue); ">
          <?php include("lib/logo.php");?>
          <div class="menu-inner-shadow" ></div>
            <?php include("layout/left_side_menu.php"); ?>
        </aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
            <?php include("layout/top_navbar.php");?>
          <!-- / Navbar -->
          <!-- Content wrapper -->
          
          <div class="content-wrapper" id="content-wrapper">
          <?php include ("placeholder.php");?>
            
            <div class="content-backdrop fade"></div>
          </div>
          
          <!-- Content wrapper -->
        </div>
    
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
 
    
    
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script >
        $(document).ready(function ($)
        {
            $("#side-menu li a").click(function (event)
            {
                $("#side-menu li").addClass("active");
            });
        });
    </script>
    
  </body>
</html>
