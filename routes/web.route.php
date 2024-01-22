<?php
include 'controllers/web/HomeController.php';
include 'controllers/web/aboutcontroller.php';
include 'controllers/web/detailcontroller.php';
include 'controllers/web/bookingcontroller.php';
include 'controllers/web/PaymentController.php';
include 'controllers/web/RoomController.php';
include 'controllers/web/AuthController.php';
include 'controllers/web/UserController.php';

//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
// Kiểm tra trên URL, nếu cos param controller thì sẽ lấy giả trị của param controller, còn không thi se bang dashboard

$routes = [
    'index' => 'HomeController',
    'about' => 'aboutcontroller',
    'detail' => 'detailcontroller',
    'bookings' => 'bookingcontroller',
    'payments' => 'PaymentController',
    'rooms' => 'RoomController',
    'auth' => 'AuthController',
    'users' => 'UserController'

];

if (array_key_exists($controller, $routes)) {
    $admin = new $routes[$controller];
    $admin->handleRequest();
} else {
    http_response_code(404);
    require 'views/errors/404.php';
    die();
}
