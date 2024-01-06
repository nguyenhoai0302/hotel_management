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
                                        <li class="breadcrumb-item"><a href="admin.php?controller=bookings&action=list">Room</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Payment</h4>
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
                                                    <label for="exampleSelect1">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="1" <?php if (isset($booking['status']) && $booking['status'] == 1) {
                                                                                echo 'selected';
                                                                            } ?>>Pendding</option>
                                                        <option value="2" <?php if (isset($booking['status']) && $booking['status'] == 2) {
                                                                                echo 'selected';
                                                                            } ?>>Approved</option>
                                                        <option value="3" <?php if (isset($booking['status']) && $booking['status'] == 3) {
                                                                                echo 'selected';
                                                                            } ?>>Rejected</option>
                                                    </select>
                                                </div>
                                                <div class="form-group text-right mb-0">
                                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="update">
                                                        Save
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
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