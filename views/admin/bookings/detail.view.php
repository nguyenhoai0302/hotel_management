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
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="admin.php?controller=bookings&action=list">Booking</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Detal Booking</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div>
                                            <form method="POST" action="#" class="parsley-examples" data-parsley-validate="" novalidate="" enctype="multipart/form-data">

                                                <div class="form-group">
                                                    <label for="id">id</label>
                                                    <input type="text" name="id" parsley-trigger="change" required="" placeholder="Enter name" class="form-control" id="id" value="<?php echo $booking['id']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="user_id">Uers name</label>
                                                    <input type="text" name="user_id" parsley-trigger="change" required="" placeholder="Enter user_id" class="form-control" id="user_id" value="<?php echo $booking['user_id']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="room_id">Room name </label>
                                                    <input type="text" name="room_id" parsley-trigger="change" required="" placeholder="Enter room_id" class="form-control" id="room_id" value="<?php echo $booking['room_id']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input"> Checkin Date</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="checkin_date" value="<?php echo $booking['checkin_date']; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="example-date-input"> Checkout Date</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="checkout_date" value="<?php echo $booking['checkout_date']; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_price">Price </label>
                                                    <input type="text" name="total_price" parsley-trigger="change" required="" placeholder="Enter total_price" class="form-control" id="total_price" value="<?php echo $booking['total_price']; ?>">
                                                </div>

                                                <!-- Status -->
                                                <div class="form-group">
                                                    <label for="exampleSelect1">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="1">Pendding</option>
                                                        <option value="2">Approved</option>
                                                        <option value="3">Rejected</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input"> Create At</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="create_at" value="<?php echo $booking['create_at']; ?>">
                                                </div>
                                                <hr>
                                                <div class="">
                                                    <div class="float-right">
                                                        <a href="admin.php?controller=bookings&action=list" class="btn btn-danger waves-effect waves-light">Delete</a>
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