<?php
 include_once 'models/ReviewModel.php';
 include_once 'utils/helpers.php';
 include_once 'models/favoriteModel.php';
class FavoriteController
{
    private $model;
    private $libs;
    public function __construct()
    {
        $this->model = new FavoriteModel(); 
        $this->libs = new LibCommon();
    }

    function handleRequest()
    {

        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
               $this->getListFavorite();
                break;
            case 'create':
                $this->createFavorite();
                break;
            case 'edit':
                $this->editFavorite($_GET['id']);
                break;
            case 'delete':
                $this->deleteFavorite($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }

    private function getListFavorite() {
        $favorite = $this->model->getList(); // Lấy toàn bộ user từ database.
        include 'views/admin/favorites/list.view.php'; // views đã có giá trị reviews 
    }

    private function createFavorite() {
        if (isset($_POST['create'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            $user_id = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
            $room_id = filter_input(INPUT_POST, 'room_name', FILTER_SANITIZE_EMAIL);

            if ($id != '' && $user_id != '' && $room_id != '') {
                $createFavorite = $this->model->create($id, $user_id, $room_id);
                if ($createFavorite) {
                    $this->libs->redirectPage('admin.php?controller=favorites&action=list');
                }
            }
        }
        include 'views/admin/favorites/create.view.php';
    }

    private function editFavorite($id) {
        $favoriteById = $this->model->getFavoriteById($id);
        $oldFavorite = $favoriteById->fetch_assoc();
    
        if (isset($_POST['update'])) {
            // $content = $_POST['content'];
            // $status = $_POST['status'];
            // $updated_at = date('Y-m-d h:i:s');
    
            if($id) {
                $checkAdd = $this->model->editFavorite($id);
                if($checkAdd === TRUE) {
                    $this->libs->redirectPage('admin.php?controller=favorites&action=list');
                }					
            }
        }
    
        include 'views/admin/favorites/edit.view.php';
    
    }

    private function deleteFavorite($id) {
        $this->model->deleteFavorite($id);
        $this->libs->redirectPage('admin.php?controller=favorites&action=list');
    }
}