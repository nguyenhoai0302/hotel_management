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
    <div class="container">
        <div class="card bg-light">
            <div class="card-body mx-auto" style="max-width: 400px;">
                <div class="card-header">
                    <h3 class="card-title text-center">Edit User</h3>
                </div>

                <form method="post" action="#" enctype="multipart/form-data">
                    <!-- Username -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input name="name" class="form-control" placeholder="Tên đăng nhập" type="text" value="<?php echo $oldUser['name'];?>">
                    </div>

                    <!-- Email -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email" type="email" value="<?php echo $oldUser['email'];?>">
                    </div>

                    <!-- Phone -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input name="phone" class="form-control" placeholder="Phone" type="text" value="<?php echo $oldUser['phone'];?>">
                    </div>

                    <!-- Role -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-building"></i></span>
                        </div>
                        <select class="form-control" name="role">
                            <option value="admin" <?php if(isset($oldUser['role']) && $oldUser['role'] == '1'){ echo 'selected';}?>>Admin</option>
                            <option value="member" <?php if(isset($oldUser['role']) && $oldUser['role'] == '2'){ echo 'selected';}?>>Member</option>
                        </select>
                    </div>

                    <!-- Gender -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-building"></i></span>
                        </div>
                        <select class="form-control" name="gender">
                            <option value="male" <?php if(isset($oldUser['gender']) && $oldUser['gender'] == '1'){ echo 'selected';}?>>Male</option>
                            <option value="female" <?php if(isset($oldUser['gender']) && $oldUser['gender'] == '2'){ echo 'selected';}?>>Female</option>
                        </select>
                    </div>

                    <!-- Birthday -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                        <input class="form-control" name="birthday" placeholder="Ngày sinh" type="date" value="<?php echo $oldUser['birthday'];?>">
                    </div>

                    <!-- Avatar -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-camera"></i></span>
                        </div>
                        <input class="form-control" name="avatar" placeholder="Avatar" type="file">
                        <img src="uploads/<?php echo $oldUser['avatar']?>" style="height: 80px; width: auto;" alt="">
                    </div>

                    <!-- Password -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" name="password" placeholder="Nhập mật khẩu" type="password" value="<?php echo $oldUser['password'];?>">
                    </div>

                    <!-- Save Button -->
                    <div class="form-group">
                        <button type="submit" name="edit" class="btn btn-primary btn-block register">Save</button>
                    </div>
                </form>
            </div>
        </div> <!-- card.// -->
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