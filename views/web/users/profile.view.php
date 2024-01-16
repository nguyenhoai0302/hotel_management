<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php include_once("../../../assets/web/css/profile_home_page.css.php") ?>
</head>

<body>
    <form action="" method="">
        <div class="row profile-home-page">
            <div class="row-name">
                <img src="../../../assets/web/images/avata1.jpg" width="200px" height="200px" class="img-avt" alt="img-avt" id="img-avt">
                <p class="name-user" id="name-user">A Tân</p>
            </div>

            <div class="row row-list d-flex justify-content-around align-content-between ">
                <div class="list--profile col-lg-3 col-12">
                    <a href="../../../views/web/rooms/personal_information.view.php">
                        <span class="material-symbols-outlined ">account_circle</span>
                        <h5>Personal information</h5>
                        <p>Provide personal information and how we can contact you</p>
                    </a>
                </div>
                <div class="list--profile col-lg-3 col-12">
                    <a href="../../../views/web/rooms/history_booking.view.php">
                        <span class="material-symbols-outlined">production_quantity_limits</span>
                        <h5>History Booking</h5>
                        <p>View booking information and their history</p>
                    </a>
                </div>
                <div class="list--profile col-lg-3 col-12">
                    <a href="../../../views/web/rooms/security.view.php">
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