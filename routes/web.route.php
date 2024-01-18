<?php
include 'controllers/web/HomeController.php';
include 'controllers/web/aboutcontroller.php';
include 'controllers/web/detailcontroller.php';
include 'controllers/web/bookingcontroller.php';
include 'controllers/web/paymentController.php';
include 'controllers/web/RoomController.php';
include 'controllers/web/AuthController.php';



//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
// Kiểm tra trên URL, nếu cos param controller thì sẽ lấy giả trị của param controller, còn không thi se bang dashboard

$routes = [
    'index' => 'HomeController',
    'about' => 'aboutcontroller',
    'detail' => 'detailcontroller',
    'bookings' => 'bookingcontroller',
    'payments' => 'paymentController',
    'rooms' => 'RoomController',
    'auth' => 'AuthController',
    'search' => 'searchcontroller',
];

if (array_key_exists($controller, $routes)) {
    $admin = new $routes[$controller];
    $admin->handleRequest();
} else {
    http_response_code(404);
    require 'views/errors/404.php';
    die();
}
