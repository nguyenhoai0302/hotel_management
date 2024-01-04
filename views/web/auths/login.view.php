
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
			<h4 class="card-title mt-3 text-center">Đăng nhập</h4>
			<?php if(isset($_SESSION['login-error'])){
				?>
			<div class="text-danger text-center my-2"><?php echo ($_SESSION['login-error']);?></div>
				<?php
			}?>
			<form method="post" action="#" enctype="multipart/form-data">
			<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
		        <input name="username" class="form-control" placeholder="Tên đăng nhập" type="text">
		    </div> <!-- form-group// -->
		    <div class="form-group input-group">
		    	<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
		        <input class="form-control" name ="password" placeholder="Nhập mật khẩu" type="password">
		    </div>                                  
		    <div class="form-group">
		        <button type="submit" name="login" class="btn btn-primary btn-block register">Đăng nhập</button>
		    </div> <!-- form-group// -->      
		    <p class="text-center">Bạn chưa có tài khoản? <a href="index.php?controller=users&action=register">Đăng ký</a></p>                                                                 
		</form>
		</article>
		</div>
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