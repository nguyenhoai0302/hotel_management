<?php
include_once 'models/RoomModel.php';
include_once 'models/SearchModel.php';


class SearchController
{
    private $searchModel;


    public function __construct()
    {
        $this->searchModel = new SearchModel();

    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'search';

        switch ($action) {
            case 'search':
                $this->getListSearch();
                break;
            default:
                // Handle unknown action
                break;
        }
    }

    private function getListSearch()
    {
        $rooms = $this->searchModel->getSearch();
        include 'views/web/rooms/room.view.php';
    }

    
}