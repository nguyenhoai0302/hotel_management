<?php include"./views/web/partials/header.view.php"
?>
<body> 
    <div class="container d-flex  justify-content-center ml-5 p-5 ">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="form">
                    <div class="title">
                        <p class="tab active" id="tab">Log In</p>
                    </div>

                    <!-- Login Form -->
                    <form action="../../../controllers/home/auth.controller.php?action=login" method="post" class="form-container sign-in-container active">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email or phone number" name="email" value="" required>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" value="" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="text-dark">Forgot your password?</a>

                        <div class="btn-group-append mt-3 d-flex justify-content-between">
                            <input class="btn back" type="submit" name="submit" value="Back">
                            <input class="btn login" type="submit" name="submit" value="Log In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include"./views/web/partials/footer.view.php"
?>

