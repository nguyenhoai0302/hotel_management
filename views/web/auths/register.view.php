<?php include "./views/web/partials/header.view.php" ?>
<div class="container d-flex  justify-content-center ml-5 p-5">
	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">				
			<h4 class="card-title mt-3 text-center" style="color: #D42D2F; font-weight: bold;">Register</h4>
			<form class="p-4" method="post" action="index.php?controller=auths&action=register" enctype="multipart/form-data">
				<div class="form-group input-group">
				<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
						</div>
					<input name="name" class="form-control" placeholder="Name" type="text">
				</div> 
				<!-- Email -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
					<input name="email" class="form-control" placeholder="Email" type="email">
				</div> 
				<!-- Phone number -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>
					<input name="phone" class="form-control" placeholder="Phone number" type="text">
				</div> 
				<!-- Role -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-building"></i> </span>
					</div>
					<select class="form-control" name="role">
						<option selected="">Role</option>
						<option value="admin">Admin</option>
						<option value="member">Member</option>
					</select>
				</div>
				<!-- Gender -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-mars-and-venus"></i></span>
					</div>
					<select class="form-control" name="gender">
						<option selected="">Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
				<!-- Birthday  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-calendar-alt"></i> </span>
					</div>
					<input class="form-control" name ="birthday" placeholder="Birthday" type="date">
				</div>
				<!-- Avatar  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-camera"></i></span>
					</div>
					<input class="form-control" name ="avatar" placeholder="Avatar" type="file">
				</div>
				<!-- Avatar  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" name ="password" placeholder="Password" type="password">
				</div>
				<!-- Password  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" name="passwordAgain"placeholder="Confirm Password" type="password">
				</div> 
				<!-- Confirm Password -->                                      
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-primary btn-block register">Register</button>
				</div> 
				<p class="text-center">Already have an account? <a href="index.php?controller=auths&action=login" style="color:blue; font-size:17px">Login</a></p>                                                                 
			</form>
		</article>
	</div>
</div>

<?php include "./views/web/partials/footer.view.php"
?>
