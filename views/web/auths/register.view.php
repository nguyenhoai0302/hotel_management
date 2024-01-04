<body class="left-side-menu-dark topbar-light">
<div id="wrapper">
    <?php
        ob_start();
        if(!isset($_SESSION)) {
            session_start();
        }
    ?>
    <div class="container">
		<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">				
			<h4 class="card-title mt-3 text-center">Đăng ký tài khoản</h4>
			<?php
                if(isset($_SESSION['reg-error'])) {
            ?>
            <div class="text-danger text-center my-2"><?php echo $_SESSION['reg-error'];?></div>
            <?php
                }
			?>
			<form method="post" action="#" enctype="multipart/form-data">
			<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
				 </div>
		        <input name="fname" class="form-control" placeholder="Tên của bạn" type="text">
		    </div>
			<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
		        <input name="username" class="form-control" placeholder="Tên đăng nhập" type="text">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				 </div>
		        <input name="email" class="form-control" placeholder="Địa chỉ email" type="email">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
				</div>
		    	<input name="phone" class="form-control" placeholder="Số điện thoại" type="text">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
				</div>
				<select class="form-control" name="role">
					<option selected="">Chọn loại tài khoản</option>
					<option value="customer">Khách hàng</option>
					<option value="admin">Quản trị viên</option>
				</select>
			</div>
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"><i class="fas fa-calendar-alt"></i> </span>
				</div>
		        <input class="form-control" name ="birthday" placeholder="Ngày sinh" type="date">
		    </div>
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"><i class="fas fa-camera"></i></span>
				</div>
		        <input class="form-control" name ="avatar" placeholder="Ảnh đại diện" type="file">
		    </div>
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input class="form-control" name ="password" placeholder="Nhập mật khẩu" type="password">
		    </div>
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input class="form-control" name="passwordAgain"placeholder="Nhập lại mật khẩu" type="password">
		    </div> <!-- form-group// -->                                      
		    <div class="form-group">
		        <button type="submit" name="register" class="btn btn-primary btn-block register">Đăng ký</button>
		    </div> <!-- form-group// -->      
		    <p class="text-center">Bạn đã có tài khoản? <a href="">Đăng nhập</a></p>                                                                 
		</form>
		</article>
		</div> <!-- card.// -->
  </div>

  <!-- Vendor js -->
<script src="assets/admin/js/vendor.min.js"></script>
<!-- App js -->
<script src="assets/admin/js/app.min.js"></script>

<!-- Plugins js -->
<script src="assets/admin/libs/dropify/dropify.min.js"></script>
<!-- Init js-->
<script src="assets/admin/js/pages/form-fileuploads.init.js"></script>