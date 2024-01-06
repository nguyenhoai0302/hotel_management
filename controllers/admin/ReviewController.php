<?php
 include_once 'models/ReviewModel.php';
 include_once 'utils/helpers.php';
class ReviewController
{
    private $model;
    private $libs;
    public function __construct()
    {
        $this->model = new ReviewModel(); 
        $this->libs = new LibCommon();
    }

    function handleRequest()
    {

        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
               $this->getListReview();
                break;
            case 'edit':
                $this->editReview($_GET['id']);
                break;
            case 'delete':
                $this->deleteReview($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }

    private function getListReview() {
        $reviews = $this->model->getList(); // Lấy toàn bộ user từ database.
        include 'views/admin/reviews/list.view.php'; // views đã có giá trị users
    }

    private function editReview($id) {
       
    }

    private function deleteReview($id) {
       
    }
}