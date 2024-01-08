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
                                        <li class="breadcrumb-item"><a href="admin.php?controller=room_images&action=list">Room_image</a></li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Room_image</h4>
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
                                                
                                                <!-- Room Name -->
                                                <div class="form-group">
                                                    <label for="room_name">Room</label>
                                                    <input type="text" name="room_name" parsley-trigger="change" required="" placeholder="Enter name" class="form-control" id="room_name" value="<?php echo $oldReview['room_name'];?>" disabled>
                                                </div>
                                                <!-- Image -->
                                                <div class="form-group">
                                                    <label for="image">Image<span class="text-danger">*</span></label>
                                                    <input type="file" name="image" parsley-trigger="change" required="" class="form-control-file" id="image" value="<?php echo $oldReview['room_name'];?>" disabled>
                                                </div>


                                                <!-- Save/Cancel -->
                                                <div class="form-group text-right mb-0">
                                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="edit">Save</button>
                                                    <a href="admin.php?controller=room_images&action=list"
                                                    class="btn btn-secondary waves-effect waves-light">Cancel</a>
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