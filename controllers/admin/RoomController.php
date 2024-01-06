<?php
include_once 'models/RoomModel.php';
include_once 'utils/helpers.php';

class RoomController
{
    private $model;
    private $libs;

    public function __construct()
    {
        $this->model = new RoomModel();
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
        $rooms = $this->model->getList();
        include 'views/admin/rooms/list.view.php';
    }

    private function createRoom()
    {
        if (isset($_POST['create'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
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
            $update_at = date('Y-m-d H:i:s');
            $created_at = date('Y-m-d H:i:s');

            if ($id != '' && $name != '' && $bedroom != '' && $bathroom != '' && $livingroom != '' && $type != '' && $price != '' && $tax != '' && $cleaning_fee != '' && $description != '' && $status != ''&& $update_at != ''&& $created_at != '') {
                $createUser = $this->model->register($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $update_at, $created_at);
                if ($createUser) {
                    $uploadDir = 'assets/uploads/room/';
                    $uploadedFile = $uploadDir . basename($_FILES['id']);
                    if (move_uploaded_file($_FILES['id'], $uploadedFile)) {
                        $this->libs->redirectPage('admin.php?controller=users&action=list');
                    }
                }
            }
        }
        include 'views/admin/rooms/create.view.php';
    }

    private function editRoom($id)
    {
        $roomById = $this->model->getRoomById($id);
        $oldRoom = $roomById->fetch_assoc();

        if (isset($_POST['edit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $bedroom = $_POST['bedroom'];
            $bathroom = $_POST['bathroom'];
            $livingroom = $_POST['livingroom'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $tax = $_POST['tax'];
            $cleaning_fee = $_POST['cleaning_fee'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $update_at = date('Y-m-d H:i:s');
            $created_at = date('Y-m-d H:i:s');

            if ($id != '' && $name != '' && $bedroom != '' && $bathroom != '' && $livingroom != '' && $type != '' && $price != '' && $tax != '' && $cleaning_fee != '' && $description != '' && $status != ''&& $update_at != ''&& $created_at != '') {
                $checkAdd = $this->model->editRoom($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $update_at, $created_at);
                if ($checkAdd === true) {
                    $this->libs->redirectPage('admin.php?controller=users&action=list');
                }
            }
        }

        include 'views/admin/rooms/edit.view.php';
    }

    private function deleteRoom($id)
    {
        $this->model->delete($id);
        $this->libs->redirectPage('admin.php?controller=rooms&action=list');
    }
}