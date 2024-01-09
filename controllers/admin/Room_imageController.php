<?php
 include_once 'models/ReviewModel.php';
 include_once 'utils/helpers.php';
 include_once 'models/Room_imageModel.php';
 
class Room_imageController
{
    private $model;
    private $libs;
    public function __construct()
    {
        $this->model = new Room_imageModel(); 
        $this->libs = new LibCommon();
    }

    function handleRequest()
    {

        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
               $this->getListRoom_image();
                break;
            case 'create':
                $this->createRoom_image();
                break;
            case 'edit':
                $this->editRoom_image($_GET['id']);
                break;
            case 'delete':
                $this->deleteRoom_image($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }

    private function getListRoom_image() {
        $room_image = $this->model->getList(); // Lấy toàn bộ user từ database.
        include 'views/admin/room_images/list.view.php'; // views đã có giá trị reviews 
    }

    private function createRoom_image() {
        if (isset($_POST['create'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            $room_id = filter_input(INPUT_POST, 'room_name', FILTER_SANITIZE_EMAIL);
            $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_EMAIL);

            if ($id != '' && $room_id != '') {
                $createRoom_image = $this->model->create($id, $room_id,$image);
                if ($createRoom_image) {
                    $this->libs->redirectPage('admin.php?controller=room_images&action=list');
                }
            }
        }
        include 'views/admin/room_images/create.view.php';
    }

    private function editRoom_image($id) {
        $room_imageById = $this->model->getRoom_imageById($id);
        $oldRoom_image = $room_imageById->fetch_assoc();
    
        if (isset($_POST['edit'])) {
            $image = $_POST['image'];          
            $updated_at = date('Y-m-d h:i:s');
    
            if($image != '' && $updated_at) {
                $checkAdd = $this->model->editRoom_image($id, $image, $updated_at);
                if($checkAdd === TRUE) {
                    $this->libs->redirectPage('admin.php?controller=room_images&action=list');
                }					
            }
        }
    
        include 'views/admin/room_images/edit.view.php';
    
    }

    private function deleteRoom_image($id) {
        $this->model->deleteRoom_image($id);
        $this->libs->redirectPage('admin.php?controller=room_images&action=list');
    }
}