<?php
require 'views/admin/partials/header.view.php'
?>

<body class="left-side-menu-dark topbar-light">

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <?php
    require 'views/admin/partials/topbar.view.php'
    ?>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <?php
    include 'views/admin/partials/sidebar.view.php';
    ?>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one bg-info">
                            <i class="icon-layers float-right m-0 h2 text-light"></i>
                            <h6 class="text-light text-uppercase mt-0">Users</h6>
                            <h3 class="my-3 text-light" data-plugin="counterup"><?php echo $totalUser['total_users'] ?></h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one bg-success">
                            <i class="icon-paypal float-right m-0 h2 text-light"></i>
                            <h6 class="text-light text-uppercase mt-0">Rooms</h6>
                            <h3 class="my-3 text-light" data-plugin="counterup"><?php echo $totalRoom['total_room'] ?></h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one bg-warning">
                            <i class="icon-chart float-right m-0 h2 text-light"></i>
                            <h6 class="text-light text-uppercase mt-0">Reviews</h6>
                            <h3 class="my-3 text-light" data-plugin="counterup"><?php echo $totalReview['total_review']?></h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one bg-danger">
                            <i class="icon-rocket float-right m-0 h2 text-light"></i>
                            <h6 class="text-light text-uppercase mt-0">Bookings</h6>
                            <h3 class="my-3 text-light" data-plugin="counterup"><?php echo $totalBooking['total_booking']?></h3>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->


        <?php include 'views/admin/partials/footer.view.php'; ?>

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="assets/admin/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/admin/js/app.min.js"></script>

</body>
</html>
