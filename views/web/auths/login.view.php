<?php include "./views/web/partials/header.view.php" ?>
<?php
   ob_start();
   if(!isset($_SESSION)) {
   	  session_start();
   }
?>
<div class="container d-flex  justify-content-center ml-5 p-5">
	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h3 class="card-title mt-3 text-center" style="color: #D42D2F; font-weight: bold;" >Login</h3>
			<?php 
				if(isset($_SESSION['login-error'])){
			?>
			<div class="text-danger text-center my-2"><?php echo ($_SESSION['login-error']);?></div>
			<?php
				}
			?>

			<form class="p-4" method="post" action="#" enctype="multipart/form-data">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="name" class="form-control" placeholder="User name" type="text">
				</div> 
				<!-- User name -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" name ="password" placeholder="Password" type="password">
				</div>    
				<!-- Login button -->
				<div class="form-group">
					<button type="submit" name="login" class="btn btn-primary btn-block register">Login</button>
				</div>  
				<a href="#" class="text-dark" style="font-size:15px">Forgot your password?</a>
				<p class="text-center mt-3">Don't have an account? <a href="index.php?controller=auths&action=register" style="color:blue; font-size:17px">Register</a></p>                                                                 
			</form>
		</article>
	</div>
</div>
<?php include "./views/web/partials/footer.view.php"
?>

