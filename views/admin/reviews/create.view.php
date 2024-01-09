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
                                        <li class="breadcrumb-item"><a href="admin.php?controller=reviews&action=list">Reviews</a></li>
                                        <li class="breadcrumb-item active">Create</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Review</h4>
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
                                                <!-- User Name -->
                                                <div class="form-group">
                                                    <label for="user_id">User<span class="text-danger">*</span></label>
                                                    <select name="user_id" id="user_id" class="form-control" required="" parsley-trigger="change">
                                                        <?php
                                                        while ($row = $users->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <!-- Room Name -->
                                                <div class="form-group">
                                                    <label for="room_id">Room<span class="text-danger">*</span></label>
                                                    <select name="room_id" id="room_id" class="form-control" required="" parsley-trigger="change">
                                                        <?php
                                                        while ($row = $rooms->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                               
                                                <!-- Content -->
                                                <div class="form-group">
                                                    <label for="content">Content<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" id="exampleTextarea" rows="6" name="content" id="content"></textarea>
                                                </div>

                                                <!-- Status -->
                                                <div class="form-group">
                                                    <label for="exampleSelect1">Status<span class="text-danger">*</span></label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option>Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Disable</option>
                                                    </select>
                                                </div>

                                                <!-- Save/Cancel -->
                                                <div class="form-group text-right mb-0">
                                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="create">Save</button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
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