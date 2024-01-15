<?php include "./views/web/partials/header.view.php" ?>

<div class="container d-flex  justify-content-center ml-5 p-5">
	<div class="card bg-light">
	<?php
		if(isset($_SESSION['login-error'])) {
			?>

				<div class="alert alert-danger d-flex align-items-center" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
					<div>
					<?php echo $_SESSION['login-error']?>
					</div>
					</div>
			<?php
		}
		
		?>
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h3 class="card-title mt-3 text-center" style="color: #D42D2F; font-weight: bold;" >Login</h3>
			<form class="p-4" method="POST" action="#" enctype="multipart/form-data">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="email" class="form-control" placeholder="User name" type="text">
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
				<p class="text-center mt-3">Don't have an account? <a href="index.php?controller=auth&action=register" style="color:blue; font-size:17px">Register</a></p>                                                                 
			</form>
		</article>
	</div>
</div>
<?php include "./views/web/partials/footer.view.php"
?>

