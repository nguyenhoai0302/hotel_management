<?php include_once("./assets/web/css/profile_home_page.css.php") ?>
<?php include "./views/web/partials/header.view.php" ?>

<body>
    <form action="" method="">
        <div class="row profile-home-page" style="margin-top: 100px;">
            <div class="row-name" style="margin-top: 100px;">
                <img src=" assets/uploads/users/<?php echo $user['avatar'] ?>" width="200px" height="200px" class="img-avt" alt="img-avt" id="img-avt">
                <p class="name-user" id="name-user"><?php echo $_SESSION['login']['name']; ?></p>
            </div>

            <div class="row row-list d-flex justify-content-around align-content-between ">
                <div class="list--profile col-lg-3 col-12">
                    <a href="index.php?controller=users&action=personal_information" class="text-decoration-none">
                        <span class="material-symbols-outlined" style="color: black;
                         font-weight: bold;"><i class="fa fa-user-circle" aria-hidden="true" style="padding:5px;"></i>Personal informationa</span>
                        <p> Provide personal information and how we can contact you</p>
                    </a>
                </div>
                <div class="list--profile col-lg-3 col-12">
                    <a href="index.php?controller=users&action=history-booking" class="text-decoration-none">
                        <span class="material-symbols-outlined" style="color: black; font-weight: bold;">
                            <i class="fa fa-shopping-cart" aria-hidden="true" style="padding:5px;"></i>
                            History Booking
                        </span>
                        <p>View booking information and their history</p>
                    </a>
                </div>
                <div class="list--profile col-lg-3 col-12">
                    <a href="index.php?controller=users&action=security" class="text-decoration-none">
                        <span class=" material-symbols-outlined" style="color: black;
                         font-weight: bold;"><i class="fa fa-shield" aria-hidden="true" style="padding:5px;"></i>Sign in and secure</span style="padding:10px;">
                        <p> Updates your password and secure your account</p>
                    </a>
                </div>
            </div>
        </div>

    </form>
</body>

<?php include "./views/web/partials/footer.view.php" ?>