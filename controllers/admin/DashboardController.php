<?php

class DashboardController
{
    function handleRequest()
    {

        $action = isset($_GET['action']) ? $_GET['action'] : 'home';


        switch ($action) {
            case 'home':
                include 'views/admin/index.view.php';
                break;
            default:
                # code...
                break;
        }
    }
}

