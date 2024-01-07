<?php
// include 'controllers/web/about.controller.php';
// include 'controllers/web/auth.controller.php';
// include 'controllers/web/index.controller.php';



function handleUrl()
{
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $uriArr = explode('/', $uri);
    if ($uriArr[1] == "") {
        return '/';
    } else {
        return $uriArr[1];
    }
}

$controller = handleUrl();
// $controller = isset($_GET['controller']) ? $_GET['controller'] : '';
// Kiểm tra trên URL, nếu cos param controller thì sẽ lấy giả trị của param controller, còn không thi se bang dashboard

$routes = [
    '/' => 'homecontroller',
    'home' => 'homecontroller',
    'about' => 'aboutcontroller',
    'room' => 'roomcontroller',
    'login' => 'logincontroller',
    'register' => 'registercontroller',
    'admin' => 'DashboardController',
    'admin/user' => 'UserController',
];

    
    if($controller == "admin"){
        if (array_key_exists($controller, $routes)) {
            require 'controllers/admin/'.$routes[$controller].'.php';   
            $admin = new $routes[$controller];
            $admin->handleRequest();
        
        } else {
            http_response_code(404);
            require 'views/errors/404.php';
            die();
        }
    }else{
        if (array_key_exists($controller, $routes)) {
            require 'controllers/web/'.$routes[$controller].'.php';   
            $admin = new $routes[$controller];
            $admin->handleRequest();
        
        } else {
            http_response_code(404);
            require 'views/errors/404.php';
            die();
        }
    }
>>>>>>> f7448dd7e254aeaa1a807719d702865a3bd7e2f6


