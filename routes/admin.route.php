<?php
include 'controllers/admin/DashboardController.php';
include 'controllers/admin/UserController.php';
include 'controllers/admin/RoomController.php';
include 'controllers/admin/AuthController.php';
include 'controllers/admin/ReviewController.php';


//$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'dashboard';
// Kiểm tra trên URL, nếu cos param controller thì sẽ lấy giả trị của param controller, còn không thi se bang dashboard

$routes = [
    'dashboard' => 'DashboardController',
    'users' => 'UserController',
    'auth' => 'AuthController',
    'reviews' => 'ReviewController',
    'rooms' => 'RoomController',
    'bookings' => 'BookingController',
    'payments' => 'PaymentController',
];

if (array_key_exists($controller, $routes)) {
    $admin = new $routes[$controller];
    $admin->handleRequest();
} else {
    http_response_code(404);
    require 'views/errors/404.php';
    die();
}
