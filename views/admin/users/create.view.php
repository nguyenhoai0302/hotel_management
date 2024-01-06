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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Add Users</h4>
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
                                                       placeholder="Enter name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" required=""
                                                       placeholder="Enter email" class="form-control" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Avatar</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box">
                                                        <input type="file" class="dropify" data-height="300" name="avatar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender<span class="text-danger">*</span></label>
                                                <select class="form-control" id="gender" name="gender">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone<span class="text-danger">*</span></label>
                                                <input type="text" name="phone" parsley-trigger="change" required=""
                                                       placeholder="Enter email" class="form-control" id="phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="example-date-input">BirthDay<span class="text-danger">*</span></label>
                                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="birthday">
                                            </div>
                                            <div class="form-group">
                                                <label for="role">Role<span class="text-danger">*</span></label>
                                                <select class="form-control" id="role" name="role">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Member</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelect1">Status<span class="text-danger">*</span></label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="2">Disable</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="pass1">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" type="password" placeholder="Password" required="" class="form-control" name ="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control" id="passWord2" name="passwordAgain">
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

