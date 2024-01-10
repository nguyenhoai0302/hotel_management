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
            default:
                # code...
                break;
        }
    }

    private function getListFavorite() {
        $favorite = $this->model->getList(); // Lấy toàn bộ user từ database.
        include 'views/admin/favorites/list.view.php'; // views đã có giá trị reviews 
    }



}