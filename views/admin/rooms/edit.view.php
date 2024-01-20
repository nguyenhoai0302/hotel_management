
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
                                    <li class="breadcrumb-item"><a href="admin.php?controller=rooms&action=list">Rooms</a></li>
                                    <li class="breadcrumb-item active">edit</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Room</h4>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div>
                                        <form method="POST" action="#" class="parsley-examples" data-parsley-validate=""
                                              novalidate="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name">Name<span class="text-danger">*</span></label>
                                                <input type="text" name="name" parsley-trigger="change" required=""
                                                       placeholder="Enter name" class="form-control" id="name" value="<?php echo $oldRoom['name'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Images <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card-box">
                                                        <input type="file" class="dropify" name="images[]"value="<?php echo $oldRoom['image'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card-box">
                                                        <input type="file" class="dropify" name="images[]" value="<?php echo $oldRoom['image'];?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="card-box">
                                                        <input type="file" class="dropify" name="images[]" value="<?php echo $oldRoom['image'];?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Bedroom<span class="text-danger">*</span></label>
                                                <input type="text" name="bedroom" parsley-trigger="change" required=""
                                                       placeholder="Enter the number of bedroom" class="form-control" id="bedroom" value="<?php echo $oldRoom['bedroom'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Bathroom<span class="text-danger">*</span></label>
                                                <input type="text" name="bathroom" parsley-trigger="change" required=""
                                                       placeholder="Enter the number of bathroom" class="form-control" id="bathroom" value="<?php echo $oldRoom['bathroom'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Livingroom<span class="text-danger">*</span></label>
                                                <input type="text" name="livingroom" parsley-trigger="change" required=""
                                                       placeholder="Enter the number of livingroom" class="form-control" id="livingroom" value="<?php echo $oldRoom['livingroom'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="type">Type<span class="text-danger">*</span></label>
                                                <select class="form-control" id="type" name="type" value="<?php echo $oldRoom['type'];?>">
                                                    <option value="Standard">Noble</option>
                                                    <option value="Economy">Normal</option>
                                                    <option value="Deluxe">Deluxe</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price<span class="text-danger">*</span></label>
                                                <input type="number" name="price" parsley-trigger="change" required=""
                                                       placeholder="Enter the price" class="form-control" id="price" value="<?php echo $oldRoom['price'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="tax">Tax<span class="text-danger">*</span></label>
                                                <input type="number" name="tax" parsley-trigger="change" required=""
                                                       placeholder="Enter the tax" class="form-control" id="tax" value="<?php echo $oldRoom['tax'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cleaning_fee">Cleaning fee<span class="text-danger">*</span></label>
                                                <input type="number" name="cleaning_fee" parsley-trigger="change" required=""
                                                       placeholder="Enter the cleaning fee" class="form-control" id="cleaning_fee" value="<?php echo $oldRoom['cleaning_fee'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Mô tả<span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="description" rows="3" name="description"><?php echo $oldRoom['description']; ?></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="status">Trạng thái<span class="text-danger">*</span></label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" <?php echo ($oldRoom['status'] == 1) ? 'selected' : ''; ?>>vailiable</option>
                                                    <option value="2" <?php echo ($oldRoom['status'] == 2) ? 'selected' : ''; ?>>unvailiable</option>
                                                </select>
                                            </div>
                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-primary waves-effect waves-light mr-1" type="submit" name="create">
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