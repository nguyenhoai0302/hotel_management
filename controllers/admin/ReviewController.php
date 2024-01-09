<?php
 include_once 'models/ReviewModel.php';
 include_once 'models/UserModel.php';
 include_once 'models/RoomModel.php';
 include_once 'utils/helpers.php';
class ReviewController
{
    private $reviewModel;
    private $userModel;
    private $roomModel;
    private $libs;
    public function __construct()
    {
        $this->reviewModel = new ReviewModel(); 
        $this->userModel = new UserModel(); 
        $this->roomModel = new RoomModel(); 
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
        $reviews = $this->reviewModel->getList();
        include 'views/admin/reviews/list.view.php';
    }

    private function createReview() {

        $users = $this->userModel->getOptionUser();
        $rooms = $this->roomModel->getOptionRoom();

        if (isset($_POST['create'])) {
            $user_id = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
            $room_id = filter_input(INPUT_POST, 'room_name', FILTER_SANITIZE_EMAIL);
            $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            if (!empty($user_id) && !empty($room_id) && !empty($content) && !empty($status)) {
                $createReview = $this->reviewModel->create($user_id, $room_id,$status, $content);
                if ($createReview) {
                    $this->libs->redirectPage('admin.php?controller=reviews&action=list');
                }
            }
        }
        include 'views/admin/reviews/create.view.php';
    }

    private function editReview($id) {
        $reviewById = $this->reviewModel->getReview($id);
        $oldReview = $reviewById->fetch_assoc();
    
        if (isset($_POST['update'])) {
            $content = $_POST['content'];
            $status = $_POST['status'];
            $updated_at = date('Y-m-d h:i:s');
    
            if($content != '' && $status != '' && $updated_at) {
                $checkAdd = $this->reviewModel->editReview($id, $content, $status, $updated_at);
                if($checkAdd === TRUE) {
                    $this->libs->redirectPage('admin.php?controller=reviews&action=list');
                }					
            }
        }
    
        include 'views/admin/reviews/edit.view.php';
    
    }

    private function deleteReview($id) {
        $this->reviewModel->deleteReview($id);
        $this->libs->redirectPage('admin.php?controller=reviews&action=list');
    }
}