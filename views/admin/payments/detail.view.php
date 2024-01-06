<?php
require 'views/admin/partials/header.view.php';
require 'utils/utils.php';
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
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="admin.php?controller=payments&action=list">Payments</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Detail Payment</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                <div class="panel-body">
                                    <div class="clearfix">
                                        <div class="float-sm-left">
                                            <h4 class="text-uppercase mt-0">payment</h4>
                                        </div>
                                        <div class="float-sm-right mt-4 mt-sm-0">
                                            <h5>Payment ID # <br>
                                                <small>123456</small>
                                            </h5>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="float-sm-left mt-4">
                                                <address>
                                                    <strong>Ten User</strong><br>
                                                    So tien<br>
                                                    <abbr title="Phone"></abbr> Phuong thuc thanh toan
                                                </address>
                                            </div>
                                            <div class="mt-4 text-sm-right">
                                                <p><strong>Payment Date: </strong> Jan 17, 2016</p>
                                                <p><strong>Payment Status: </strong> <span class="badge badge-danger">Pending</span></p>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="clearfix mt-5">
                                                <h5 class="small"></h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-right mt-4">
                                                <p><b>Sub-total:</b> 2930.00</p>
                                                <p>Discout: 12.9%</p>
                                                <p>VAT: 12.9%</p>
                                                <hr>
                                                <h3>$ 2930.00 USD</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="">
                                        <div class="float-right">
                                            <a href="#" class="btn btn-danger waves-effect waves-light">Delete</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>




                </div>

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