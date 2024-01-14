<?php
include 'controllers/web/homecontroller.php';
include 'controllers/web/aboutcontroller.php';
include 'controllers/web/detailcontroller.php';
include 'controllers/web/bookingcontroller.php';
include 'controllers/web/paymentcontroller.php';
include 'controllers/web/roomcontroller.php';
include 'controllers/web/logincontroller.php';
include 'controllers/web/registercontroller.php';


//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
// Kiểm tra trên URL, nếu cos param controller thì sẽ lấy giả trị của param controller, còn không thi se bang dashboard

$routes = [
    '/' => 'homecontroller',
    'home' => 'homecontroller',
    'about' => 'aboutcontroller',
    'detail' => 'detailcontroller',
    'bookings' => 'bookingcontroller',
    'payments' => 'paymentcontroller',
    'rooms' => 'roomcontroller',
    'login' => 'logincontroller',
    'register' => 'registercontroller',
];

if (array_key_exists($controller, $routes)) {
    $web = new $routes[$controller];
    $web->handleRequest();
} else {
    http_response_code(404);
    require 'views/errors/404.php';
    die();
}
