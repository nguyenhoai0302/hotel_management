<?php
include_once 'models/RoomModel.php';

class HomeController
{
    private $roomModel;

    public function __construct()
    {
        $this->roomModel = new RoomModel();
    }
    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';

        switch ($action) {
            case 'home':
                $this->getHomePage();
                break;
            case 'search':
                $this->searchRoom($_GET['keyword']);
                break;
            default:
                # code...
                break;
        }
    }


    private function getHomePage()
    {
        $rooms = $this->roomModel->getListRoomHomePage();

        include 'views/web/index.view.php';
    
    }

    private function searchRoom($keyword)
    {
        $rooms = $this->roomModel->searchRoomByKeyword($keyword);

        include 'views/web/rooms/search.view.php';
    
    }
    

}

 