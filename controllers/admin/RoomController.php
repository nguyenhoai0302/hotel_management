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
            case 'create':
                $this->createRoom();
                break;
            case 'edit':
                $this->editRoom($_GET['id']);
                break;
            case 'delete':
                $this->deleteRoom($_GET['id']);
                break;
            default:
                // Handle unknown action
                break;
        }
    }

    private function getListRoom()
    {
        $rooms = $this->roomModel->getList();
        include 'views/admin/rooms/list.view.php';
    }

    private function createRoom()
    {
        if (isset($_POST['create'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_EMAIL);
            $bedroom = filter_input(INPUT_POST, 'bedroom', FILTER_SANITIZE_STRING);
            $bathroom = filter_input(INPUT_POST, 'bathroom', FILTER_SANITIZE_STRING);
            $livingroom = filter_input(INPUT_POST, 'livingroom', FILTER_SANITIZE_STRING);
            $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
            $tax = filter_input(INPUT_POST, 'tax', FILTER_SANITIZE_STRING);
            $cleaning_fee = filter_input(INPUT_POST, 'cleaning_fee', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            $images = $_FILES['images']['name'];

            if (!empty($name) && !empty($bedroom) && !empty($bathroom) && !empty($livingroom) && !empty($type) && !empty($price)
                && !empty($tax) && !empty($cleaning_fee) && !empty($description) && !empty($status)) {
                $create = $this->roomModel->create($name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status);

                if ($create) {
                    if (!empty($images)) {
                        $roomId = $this->roomModel->getLastId()->fetch_assoc();
                        foreach ($images as $image) {
                            $this->roomImageModel->create($roomId['id'], $image);
                        }
                        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                            move_uploaded_file($tmp_name, 'assets/uploads/rooms/'.$_FILES['images']['name'][$key]);
                        }
                    }
                    $this->libs->redirectPage('admin.php?controller=rooms&action=list');
                }
            }
        }
        include 'views/admin/rooms/create.view.php';
    }

    private function editRoom($id)
    {
        $roomById = $this->roomModel->getRoomById($id);
        $room = [];
        while($row = $roomById->fetch_assoc()) {
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

        if (isset($_POST['save'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_EMAIL);
            $bedroom = filter_input(INPUT_POST, 'bedroom', FILTER_SANITIZE_STRING);
            $bathroom = filter_input(INPUT_POST, 'bathroom', FILTER_SANITIZE_STRING);
            $livingroom = filter_input(INPUT_POST, 'livingroom', FILTER_SANITIZE_STRING);
            $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
            $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
            $tax = filter_input(INPUT_POST, 'tax', FILTER_SANITIZE_STRING);
            $cleaning_fee = filter_input(INPUT_POST, 'cleaning_fee', FILTER_SANITIZE_STRING);
            $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            $images = $_FILES['images']['name'];

       
            if (!empty($name) && !empty($bedroom) && !empty($bathroom) && !empty($livingroom) && !empty($type) && !empty($price)
                && !empty($tax) && !empty($cleaning_fee) && !empty($description) && !empty($status)) {
                $editRoom = $this->roomModel->editRoom( $id,$name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status);
                if($editRoom) {
                    if (!empty($images)) {
                        $this->roomImageModel->deleteImagesByRoomId($id);
                        foreach ($images as $image) {
                            $this->roomImageModel->create($id, $image);
                        }
                        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                            move_uploaded_file($tmp_name, 'assets/uploads/rooms/'.$_FILES['images']['name'][$key]);
                        }
                    }
                    $this->libs->redirectPage('admin.php?controller=rooms&action=list');
              
            }
            
        }
    }

        include 'views/admin/rooms/edit.view.php';
    }

    private function deleteRoom($id)
    {
        $this->roomModel->delete($id);
        $this->libs->redirectPage('admin.php?controller=rooms&action=list');
    }
}