<?php
include_once 'models/RoomModel.php';
include_once 'models/RoomImageModel.php';
include_once 'utils/helpers.php';

class RoomController
{
    private $roomModel;
    private $roomImageModel;
    private $libs;

    public function __construct()
    {
        $this->roomModel = new RoomModel();
        $this->roomImageModel = new RoomImageModel();
        $this->libs = new LibCommon();
    }

    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
                $this->getListRoom();
                break;
            case 'detail':
                $this->getDetailRoom($_GET['id']);
                break;
            default:
                // Handle unknown action
                break;
        }
    }

    private function getListRoom()
    {
        $rooms = $this->roomModel->getList();
        include 'views/web/rooms/room.view.php';
    }

    private function getDetailRoom($id)
    {
        $query = $this->roomModel->getDetailById($id);

        $room = $query->fetch_assoc();

        include 'views/web/rooms/detail.view.php';
    }
}
