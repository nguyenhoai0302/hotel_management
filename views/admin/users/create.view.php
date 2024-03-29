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
                                        <li class="breadcrumb-item"><a href="admin.php?controller=users&action=list">Users</a></li>
                                        <li class="breadcrumb-item active">Create</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add User</h4>
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
                                                    <label for="name">Name<span class="text-danger">*</span></label>
                                                    <input type="text" name="name" parsley-trigger="change" required="" placeholder="Enter name" class="form-control" id="name" data-parsley-required="true" data-parsley-trigger="change" data-parsley-error-message="Please enter your name">
                                                </div>

                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email">Email<span class="text-danger">*</span></label>
                                                    <input type="email" name="email" parsley-trigger="change" required="" placeholder="Enter email" class="form-control" id="email" data-parsley-required="true" data-parsley-trigger="change" data-parsley-type="email" data-parsley-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i" data-parsley-error-message="Please enter a valid email address">
                                                </div>

                                                <!-- Avatar -->
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

                                                <!-- Gender -->
                                                <div class="form-group">
                                                    <label for="gender">Gender<span class="text-danger">*</span></label>
                                                    <select class="form-control" id="gender" name="gender">
                                                        <option>Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>

                                                <!-- Phone -->
                                                <div class="form-group">
                                                    <label for="phone">Phone<span class="text-danger">*</span></label>
                                                    <input type="tel" name="phone" parsley-trigger="change" required="" placeholder="Enter phone number" class="form-control" id="phone" data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^0[0-9]{9,14}$" data-parsley-error-message="Please enter a valid phone number starting with 0 and with a length between 10 and 15 digits">
                                                </div>

                                                <!-- Birthday -->
                                                <div class="form-group">
                                                    <label for="example-date-input">BirthDay<span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date" value="" id="example-date-input" name="birthday">
                                                </div>

                                                <!-- Role -->
                                                <div class="form-group">
                                                    <label for="role">Role<span class="text-danger">*</span></label>
                                                    <select class="form-control" id="role" name="role">
                                                        <option>Role</option>
                                                        <option value="1">Admin</option>
                                                        <option value="2">Member</option>
                                                    </select>
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

                                                <!-- Password -->
                                                <div class="form-group">
                                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input id="pass1" type="password" placeholder="Password" required="" class="form-control" name="password" data-parsley-required="true" data-parsley-trigger="change" data-parsley-pattern="^(?=.*[a-zA-Z0-9!@#$%^&*])[\w!@#$%^&*]{6,}$" data-parsley-error-message="Password must be at least 6 characters long and contain at least one alphanumeric character and one special character (!@#$%^&*)">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-eye" id="togglePassword1"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Confirm Password -->
                                                <div class="form-group">
                                                    <label for="passWord2">Confirm Password<span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input data-parsley-equalto="#pass1" type="password" required="" placeholder="Password" class="form-control" id="passWord2" name="passwordAgain">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fas fa-eye" id="togglePassword2"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

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

    <?php include 'assets/admin/js/users/user.js.php';?>

    <!-- Vendor js -->
    <script src="assets/admin/js/vendor.min.js"></script>
    <!-- App js -->
    <script src="assets/admin/js/app.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/admin/libs/dropify/dropify.min.js"></script>
    <!-- Init js-->
    <script src="assets/admin/js/pages/form-fileuploads.init.js"></script>
    <!-- Include Parsley.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

