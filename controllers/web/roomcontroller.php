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
            case 'search':
                $this->getSearchRoom($_GET['room_id']);
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
    ////
    private function getSearchRoom($roomId)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn'])) {
            $nav_input = $_POST['nav_input'];
        } else {
            echo $nav_input = false;
        }

        $rooms = $this->roomModel->getSearchRoom($roomId);

        include 'views/web/rooms/room.view.php';
    }
}
