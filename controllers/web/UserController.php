<?php
include_once 'models/UserModel.php';
include_once 'models/BookingModel.php';
include_once 'utils/helpers.php';

class UserController
{
    private $model;
    private $bookingModel;
    private $libs;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->bookingModel = new BookingModel();
        $this->libs = new LibCommon();
    }
    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'profile';

        if (isset($_SESSION['login']) && $_SESSION['login']['role'] == '2') {
            $userId = $_SESSION['login']['id'];
        } else {
            $userId = Null;
        }

        switch ($action) {
            case 'profile':
                $this->getProfile($userId);
                break;
            case 'personal_information':
                $this->getPersonalInformation($userId);
                break;
            case 'history-booking':
                $this->getHistoryBooking($userId);
                break;
            case 'security':
                $this->getSecurity($userId);
                break;
            default:
                # code...
                break;
        }
    }

    private function getProfile($userId)
    {
        // Kiểm tra nếu user chưa đăng nhập mà truy cập vào trang này thì sẽ đá sang trang login
        if ($userId) {
            $query = $this->model->getUser($userId);
            $user = $query->fetch_assoc();
            include 'views/web/users/profile.view.php';
        } else {
            $this->libs->redirectPage('index.php?controller=auth&action=login');
        }
    }

    private function getPersonalInformation($userId)
    {
        // Kiểm tra nếu user chưa đăng nhập mà truy cập vào trang này thì sẽ đá sang trang login
        if ($userId) {
            $query = $this->model->getUser($userId);
            $user = $query->fetch_assoc();

            include 'views/web/users/personal_information.view.php';
        } else {
            $this->libs->redirectPage('index.php?controller=auth&action=login');
        }
    }
    private function getSecurity($userId)
    {
        // Kiểm tra nếu user chưa đăng nhập mà truy cập vào trang này thì sẽ đá sang trang login
        if ($userId) {
            $query = $this->model->getUser($userId);
            $user = $query->fetch_assoc();
            include 'views/web/users/security.view.php';
        } else {
            $this->libs->redirectPage('index.php?controller=auth&action=login');
        }
    }

    private function getHistoryBooking($userId)
    {
        $historyBookings = $this->bookingModel->getHistoryBooking($userId);
        
        include 'views/web/bookings/history_booking.view.php';
    }
}
