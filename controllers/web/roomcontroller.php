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
                $this->getList();
                break;   
            case 'detail':
                $this->getDetail($_GET['id']);
                break;
            default:
                // Handle unknown action
                break;
        }
    }

    private function getList()
    {
        $rooms = $this->roomModel->getListRoom();

        include 'views/web/rooms/room.view.php';
    
    }

    private function getDetail($id)
    {
        $query = $this->roomModel->getRoomById($id);
        $room = [];
        while($row = $query->fetch_assoc()) {
            if(empty($room)) {
                $room['id'] = $row['id'];
                $room['name'] = $row['name'];
                $room['bedroom'] = $row['bedroom'];
                $room['bathroom'] = $row['bathroom'];
                $room['livingroom'] = $row['livingroom'];
                $room['type'] = $row['type'];
                $room['price'] = $row['price'];
                $room['tax'] = $row['tax'];
                $room['cleaning_fee'] = $row['cleaning_fee'];
                $room['description'] = $row['description'];
                $room['status'] = $row['status'];
            }
            $room['images'][] = $row['image'];
        }
       
        include 'views/web/rooms/detail.view.php';
    }

}