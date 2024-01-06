<?php include"./views/web/partials/header.view.php"
?>
<body> 
    <div class="container d-flex  justify-content-center ml-5 p-5 ">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="form">
                    <div class="title">
                        <p class="tab active" id="tab">Register</p>
                    </div>

                    <!-- Register Form -->
                    <form action="../../../controllers/home/auth.controller.php?action=login" method="post" class="form-container sign-in-container active">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="" required>
                        </div>
                        <div class="form-group input-group">
                            <select class="form-control" name="role">
                                <option selected="">Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input id="date" type="date" class="form-control" placeholder="Date of birthday" name="birthday" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <select id="gender" class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="phone" class="form-control" placeholder="Phone number" name="phone" value="" required>
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
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="password" value="" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group-append mt-3 d-flex justify-content-between">
                            <input class="btn back" type="submit" name="submit" value="Back">
                            <input class="btn login" type="submit" name="submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include"./views/web/partials/footer.view.php"
?>
