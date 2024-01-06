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
                # code...
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
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
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

            
            if ($id !== '' && $name !== '' && $bedroom !== '' && $bathroom !== '' && $livingroom !== '' && $type !== '' && $price !== '' && $tax !== '' && $cleaning_fee !== '' && $description !== '' && $status !== '' && $update_at !== '' && $created_at !== '') {
                $createRoom = $this->model->create( $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $update_at, $created_at);
                if ($createRoom) {
                   $this->libs->redirectPage('admin.php?controller=rooms&action=list');
            
                }
            }
        }
        include 'views/admin/rooms/create.view.php';
    }


    private function editRoom($id) {

        $roomById = $this->model->getRoomById($id);
        $oldRoom = $roomById->fetch_assoc();
    
        if (isset($_POST['edit'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
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
        
            if($name !== '' && $type !== '' && $price !== '' && $description !== '' && $status !== '' && $created_at !== '') {
                $checkAdd = $this->model->editRoom($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $created_at);
                if($checkAdd === TRUE) {
                    $this->libs->redirectPage('admin.php?controller=rooms&action=list');
                }					
            }
        }
    
        include 'views/admin/rooms/create.view.php';
    }

    private function deleteRoom($id)
    {
        $this->model->delete($id);
        $this->libs->redirectPage('admin.php?controller=rooms&action=list');
    }
}