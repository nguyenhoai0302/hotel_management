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
            case 'create':
                $this->createReview();
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
        include 'views/admin/reviews/list.view.php'; // views đã có giá trị reviews 
    }

    private function createReview() {
        if (isset($_POST['create'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            $user_id = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
            $room_id = filter_input(INPUT_POST, 'room_name', FILTER_SANITIZE_EMAIL);
            $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

            if ($id != '' && $user_id != '' && $room_id != '' && $content != '' && $status != '') {
                $createReview = $this->model->create($id, $user_id, $room_id,$status, $content);
                if ($createReview) {
                    $this->libs->redirectPage('admin.php?controller=reviews&action=list');
                }
            }
        }
        include 'views/admin/reviews/create.view.php';
    }

    private function editReview($id) {
        $reviewById = $this->model->getReviewById($id);
        $oldReview = $reviewById->fetch_assoc();
    
        if (isset($_POST['edit'])) {
            $user_id = $_POST['user_id'];
            $room_id = $_POST['room_id'];
            $content = $_POST['content'];
            $status = $_POST['status'];
            $updated_at = date('Y-m-d h:i:s');
    
            if($user_id != '' && $room_id != '' && $content != '' && $status != '' && $updated_at) {
                $checkAdd = $this->model->editReview($id, $user_id, $room_id, $content, $status, $updated_at);
                if($checkAdd === TRUE) {
                    $this->libs->redirectPage('admin.php?controller=reviews&action=list');
                }					
            }
        }
    
        include 'views/admin/reviews/edit.view.php';
    
    }

    private function deleteReview($id) {
        $this->model->deleteReview($id);
        $this->libs->redirectPage('admin.php?controller=reviews&action=list');
    }
}