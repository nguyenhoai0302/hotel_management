<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Sun Hotel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- link header and footer -->
    <?php include("./assets/web/css/header.footer.css.php") ?>
    <?php include("./assets/web/css/home.css.php") ?>
    <?php include("./assets/web/css/about.css.php") ?>
    <?php include("./assets/web/css/room.css.php") ?>
    <?php include("./assets/web/css/detail.css.php") ?>
    <?php include("./assets/web/css/booking.css.php") ?>
    <?php include("./assets/web/css/payment.css.php") ?>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/admin/images/logo.png">
</head>

<body>
    <div class="nav">
        <!-- tạo reponsive cho navbar -->
        <div class="logo nav_text">
            <a href="hotel_home_page.html"><img src="assets/web/images/logo.png" id="logo_nav" alt="logo"></a>
        </div>
        <div class="nav_text"><a class="nav_text" href="index.php?controller=index">HOME</a></div>
        <div class="nav_text"><a class="nav_text" href="index.php?controller=about">ABOUTS US</a></div>
        <div class="nav_text"><a class="nav_text" href="index.php?controller=rooms&action=list">ROOMS</a></div>
        <div class="nav_text nav_text_search">
            <form action="index.php?controller=rooms&action=list" method=" post">
                <input type="text" name="nav_input" id="nav_input_search" style="outline: none; padding-left:20px; " placeholder="Search">
                <button class="material-symbols-outlined" id="search" type="submit" name="btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            <!-- end tìm kiếm phòng -->
        </div>

        <!-- Trường hợp đăng nhập tài khoản Customer -->
        <?php
        if (isset($_SESSION['login']) && $_SESSION['login']['role'] == '2') {
        ?>
            <div class="nav_log nav_text">
                <div class="nav_text">
                    <a class="nav_text" href="index.php?controller=users&action=profile"><span><i class="fas fa-user"></i></span> <?php echo $_SESSION['login']['name']; ?></a>
                </div>
                <div class="nav_text">
                    <a class="nav_text" href="index.php?controller=auth&action=logout">LOG OUT</a>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="nav_log nav_text">
                <div class="nav_text"><a class="nav_text" href="index.php?controller=auth&action=login">SIGN IN</a></div>
                <div class="nav_text"><a class="nav_text" href="index.php?controller=register">REGISTER</a></div>
            </div>
        <?php
        }
        ?>

    </div>
</body>