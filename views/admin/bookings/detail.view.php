<?php
require 'views/admin/partials/header.view.php'
?>

<body class="left-side-menu-dark topbar-light">
    <div id="wrapper">
        <?php
        require 'views/admin/partials/topbar.view.php'
        ?>
        <?php
        include 'views/admin/partials/sidebar.view.php';
        ?>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="admin.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="admin.php?controller=bookings&action=list">Bookings</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Detail Booking</h4>
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
                                                    <label for="user_id">User</label>
                                                    <input type="text" name="user_id" parsley-trigger="change" required="" placeholder="Enter user_id" class="form-control" id="user_id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="room_id">Room</label>
                                                    <input type="room_id" name="room_id" parsley-trigger="change" required="" placeholder="Enter room_id" class="form-control" id="room_id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input">'
                                                        Checkin Date</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="Checkin_date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input">'
                                                        Checkout Date</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="Checkout_date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_price">Price</label>
                                                    <input type="total_price" name="total_price" parsley-trigger="change" required="" placeholder="Enter total_price" class="form-control" id="total_price">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleSelect1">Status<label>
                                                            <select class="form-control" id="status" name="status">
                                                                <option value="1">Pendding
                                                                <option>
                                                                <option value="2">Approved
                                                                <option>
                                                                <option value="3">Rejected
                                                                <option>
                                                            </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input">'
                                                        Created At</label>
                                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="created_at">
                                                </div>

                                                <div class="form-group text-right mb-0">
                                                    <div class="float-right">
                                                        <a href="admin.php?controller=bookings&action=list" class="btn btn-danger waves-effect waves-light">Delete</a>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'views/admin/partials/footer.view.php'; ?>

        </div>
    </div>
    <!-- Vendor js -->
    <script src="assets/admin/js/vendor.min.js"></script>
    <!-- App js -->
    <script src="assets/admin/js/app.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/admin/libs/dropify/dropify.min.js"></script>
    <!-- Init js-->
    <script src="assets/admin/js/pages/form-fileuploads.init.js"></script>
</body>

</html>
id` int(11) NOT NULL,
`user_id` int(10) NOT NULL,
`room_id` int(10) NOT NULL,
`checkin_date` timestamp NULL DEFAULT NULL,
`checkout_date` timestamp NULL DEFAULT NULL,
`total_price` int(10) NOT NULL,
`status` int(10) NOT NULL,
`note` text DEFAULT NULL,
`updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
`created_at`