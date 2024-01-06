<?php
include_once 'models/UserModel.php';
include_once 'models/ReviewModel.php';
include_once 'models/RoomModel.php';
include_once 'models/BookingModel.php';

class DashboardController
{
    private $userModel;
    private $reviewModel;
    private $roomModel;
    private $bookingModel;
    public function __construct()
    {
        $this->userModel = new UserModel(); 
        $this->reviewModel = new ReviewModel(); 
        $this->roomModel = new RoomModel(); 
        $this->bookingModel = new BookingModel(); 
    }

    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';

        switch ($action) {
            case 'home':
                $this->getInfoDashboard();
                break;
            default:
                # code...
                break;
        }
    }

    function getInfoDashboard()
    {
        $queryUser = $this->userModel->totalUser();
        $totalUser = $queryUser->fetch_assoc();

        $queryRoom = $this->roomModel->totalRoom();
        $totalRoom = $queryRoom->fetch_assoc();

        $queryReview = $this->reviewModel->totalReview();
        $totalReview = $queryReview->fetch_assoc();

        $queryBooking = $this->bookingModel->totalBooking();
        $totalBooking = $queryBooking->fetch_assoc();

        include 'views/admin/index.view.php';
    }
}