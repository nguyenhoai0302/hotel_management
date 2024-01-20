<?php include_once("./assets/web/css/profile_home_page.css.php") ?>
<?php include "./views/web/partials/header.view.php" ?>

<body>
    <form action="" method="">
        <div class="row profile-home-page">
            <div class="row-name">
                <img src="assets/uploads/users/<?php echo $user['avatar'] ?>" width="200px" height="200px" class="img-avt" alt="img-avt" id="img-avt">
                <p class="name-user" id="name-user"><?php echo $_SESSION['login']['name']; ?></p>
            </div>

            <div class="row row-list d-flex justify-content-around align-content-between ">
                <div class="list--profile col-lg-3 col-12">
                    <a href="index.php?controller=users&action=personal_information">
                        <span class="material-symbols-outlined ">account_circle</span>
                        <h5>Personal information</h5>
                        <p>Provide personal information and how we can contact you</p>
                    </a>
                </div>
                <div class="list--profile col-lg-3 col-12">
                    <a href="./views/web/rooms/history_booking.view.php">
                        <span class="material-symbols-outlined">production_quantity_limits</span>
                        <h5>History Booking</h5>
                        <p>View booking information and their history</p>
                    </a>
                </div>
                <div class="list--profile col-lg-3 col-12">
                    <a href="views/web/rooms/security.view.php">
                        <span class="material-symbols-outlined">admin_panel_settings</span>
                        <h5> Sign in and secure</h5>
                        <p>Updates your password and secure your account</p>
                    </a>
                </div>
            </div>
        </div>
        <div id="pp" style="height: 114px;"></div>
    </form>
</body>

<?php include "./views/web/partials/footer.view.php" ?>