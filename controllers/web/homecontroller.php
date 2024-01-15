<?php
include_once 'models/UserModel.php';

class HomeController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }
    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';

        switch ($action) {
            case 'home':
                $this->getHomePage();
                break;
            default:
                # code...
                break;
        }
    }


    private function getHomePage()
    {

        include 'views/web/index.view.php';
        
    }

}

 