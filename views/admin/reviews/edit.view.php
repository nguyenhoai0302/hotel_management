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
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Edit Review</h4>
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
                                                    <label for="user_name">User</label>
                                                    <input type="text" name="user_name" parsley-trigger="change" required="" placeholder="Enter name" class="form-control" id="user_name" value="<?php echo $oldReview['user_name'];?>" disabled>
                                                </div>
                                                
                                                <!-- Room Name -->
                                                <div class="form-group">
                                                    <label for="room_name">Room</label>
                                                    <input type="text" name="room_name" parsley-trigger="change" required="" placeholder="Enter name" class="form-control" id="room_name" value="<?php echo $oldReview['room_name'];?>" disabled>
                                                </div>

                                                <!-- Content -->
                                                <div class="form-group">
                                                    <label for="content">Content</label>
                                                    <!-- <input type="textarea" name="content" parsley-trigger="change" required="" placeholder="Enter content" class="form-control" id="content" value="<?php echo $oldReview['content'];?>"> -->
                                                    <textarea class="form-control" id="exampleTextarea" rows="6" name="content" id="content"><?php echo $oldReview['content'];?></textarea>
                                                </div>

                                                <!-- Status -->
                                                <div class="form-group">
                                                    <label for="exampleSelect1">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option value="1" <?php if(isset($oldReview['status']) && $oldReview['status'] == '1'){ echo 'selected';}?>>Active</option>
                                                        <option value="2" <?php if(isset($oldReview['status']) && $oldReview['status'] == '2'){ echo 'selected';}?>>Disabled</option>
                                                    </select>
                                                </div>

                                                <!-- Save/Cancel -->
                                                <div class="form-group text-right mb-0">
                                                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="update">Save</button>
                                                    <a href="admin.php?controller=reviews&action=list"
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