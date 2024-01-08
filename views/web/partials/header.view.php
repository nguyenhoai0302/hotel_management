<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "./assets/web/css/auth.css.php" ?>
    <!-- link header and footer -->
    <?php include("./assets/web/css/header.footer.css.php") ?>

    <?php include("./assets/web/css/home.css.php") ?>
    <?php include("./assets/web/css/about.css.php") ?>
    <?php include("./assets/web/css/room.css.php") ?>



</head>

<body>
    <div class="nav">
        <!-- tạo reponsive cho navbar -->
        <div class="logo nav_text">
            <a href="hotel_home_page.html"><img src="../../../assets/web/images/logo.png" id="logo_nav" alt="logo"></a>
        </div>
        <div class="nav_text"><a class="nav_text" href="home">HOME</a></div>
        <div class="nav_text"><a class="nav_text" href="about">ABOUTS US</a></div>
        <div class="nav_text"><a class="nav_text" href="room">ROOMS</a></div>
        <div class="nav_text nav_text_search">
            <input type="text" name="nav_input" id="nav_input_search" style="outline: none; padding-left:20px; " placeholder="Search">
            <button class="material-symbols-outlined" id="search" onclick="search()">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <!-- tại đây sửa tạp thời khi đăng nhập tạo avata -->
        <div class="nav_log nav_text">
            <div class="nav_log_text" id="sign">
                <button type="button" class="nav-text-signin" id="showModal" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">SIGN IN</button>
            </div>
            <div class="nav_log_text" id="register">
                <button type="button" class="nav-text-signin" id="register" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-whatever="@mdo">REGISTER</button>
            </div>
        </div>
        <!-- 
        <div class="nav_log nav_text nav-item dropdown" id="avata">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img id="nav-avata" src="https://thuthuatnhanh.com/wp-content/uploads/2020/02/icon-ong-bee-phan-van.png" alt="avata">
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="Favorite.html" style="color: #f45cad;" id="Favorite">Favorite</a></li>
                <li><a class="dropdown-item" href="profile_home_page.html" style="color: #f45cad;">Account</a></li>
                <li><a class="dropdown-item" href="hotel_home_page.html" style="color: #f45cad;" id="logout" onclick="logout()">Log out</a></li>
            </ul>
        </div>    
         -->

    </div>
</body>

<script>
    const login = document.getElementById('showModal');
    login.addEventListener('click', () => {
        window.location.href = 'login';
    })

    const register = document.getElementById('register');
    register.addEventListener('click', () => {
        window.location.href = 'register';
    })
</script>