<?php include "./views/web/partials/header.view.php" ?>
<div class="container d-flex  justify-content-center ml-5 p-5">
	<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center" style="color: #D42D2F; font-weight: bold;">Register</h4>
			<form class="p-4" method="post" action="index.php?controller=auth&action=register&name=register" onsubmit="return validateForm();">
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
						<!-- <option selected="">Role</option>
						<option value="admin">Admin</option> -->
						<option value="2">Member</option>
					</select>
				</div>
				<!-- Gender -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-mars-and-venus"></i></span>
					</div>
					<select class="form-control" name="gender">
						<option selected="">Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<!-- Status -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-mars-and-venus"></i></span>
					</div>
					<select class="form-control" name="status">
						<!-- <option selected="">Status</option> -->
						<option value="1">Active</option>
						<!-- <option value="2">Disable</option> -->
					</select>
				</div>
				<!-- Birthday  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-calendar-alt"></i> </span>
					</div>
					<input class="form-control" name="birthday" placeholder="Birthday" type="date">
				</div>
				<!-- Avatar  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-camera"></i></span>
					</div>
					<input class="form-control" name="avatar" placeholder="Avatar" type="file">
				</div>
				<!-- Avatar  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" name="password" placeholder="Password" type="password">
				</div>
				<!-- Password  -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" name="passwordAgain" placeholder="Confirm Password" type="password">
				</div>
				<!-- Confirm Password -->
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-primary btn-block register">Register</button>
				</div>
				<p class="text-center">Already have an account? <a href="index.php?controller=auth&action=login" style="color:blue; font-size:17px">Login</a></p>
			</form>
		</article>
	</div>
</div>

<?php include "./views/web/partials/footer.view.php"
?>
<script>
                    function validateForm() {
                        var name = document.forms["registrationForm"]["name"].value;
                        var email = document.forms["registrationForm"]["email"].value;
                        var phone = document.forms["registrationForm"]["phone"].value;
                        var password = document.forms["registrationForm"]["password"].value;
                        var passwordAgain = document.forms["registrationForm"]["passwordAgain"].value;

                        // Clear previous error messages
                        clearErrorMessages();

                        var isValid = true;

                        if (name == "") {
                            displayErrorMessage("name", "Name must be filled out");
                            isValid = false;
                        }

                        if (!isValidEmail(email)) {
                            displayErrorMessage("email", "Invalid email address");
                            isValid = false;
                        }

                        if (!isValidPhone(phone)) {
                            displayErrorMessage("phone", "Invalid phone number");
                            isValid = false;
                        }

                        // Add more validation rules for other fields as needed

                        if (password == "") {
                            displayErrorMessage("password", "Password must be filled out");
                            isValid = false;
                        } else if (password.length < 6) {
                            displayErrorMessage("password", "Password must be at least 6 characters");
                            isValid = false;
                        }

                        if (passwordAgain == "" || passwordAgain !== password) {
                            displayErrorMessage("passwordAgain", "Passwords do not match");
                            isValid = false;
                        }

                        return isValid;
                    }

                    function isValidEmail(email) {
                        // Basic email validation
                        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        return emailRegex.test(email);
                    }

                    function isValidPhone(phone) {
                        // Basic phone number validation (digits only, at least 10 digits)
                        var phoneRegex = /^\d{10,}$/;
                        return phoneRegex.test(phone);
                    }

                    function displayErrorMessage(fieldId, message) {
                        var errorMessageElement = document.getElementById(fieldId + "-error");
                        errorMessageElement.textContent = message;
                    }

                    function clearErrorMessages() {
                        var errorMessages = document.getElementsByClassName("error-message");
                        for (var i = 0; i < errorMessages.length; i++) {
                            errorMessages[i].textContent = "";
                        }
                    }
                </script>