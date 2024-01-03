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
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Golden Sun</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                                    <li class="breadcrumb-item active">Dark Sidebar</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dark Sidebar</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                            <h3 class="my-3" data-plugin="counterup">1,587</h3>
                            <span class="badge badge-success mr-1"> +11% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                            <h3 class="my-3">$<span data-plugin="counterup">46,782</span></h3>
                            <span class="badge badge-danger mr-1"> -29% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-chart float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Average Price</h6>
                            <h3 class="my-3">$<span data-plugin="counterup">15.9</span></h3>
                            <span class="badge badge-pink mr-1"> 0% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                            <h3 class="my-3" data-plugin="counterup">1,890</h3>
                            <span class="badge badge-warning mr-1"> +89% </span> <span class="text-muted">Last year</span>
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
