<?php
include_once 'models/BookingModel.php';
include_once 'utils/helpers.php';

class BookingController
{
    private $model;
    private $libs;

    public function __construct()
    {
        $this->model = new BookingModel();
        $this->libs = new LibCommon();
    }
    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
                $this->getListBooking();
                break;
            case 'edit':
                $this->editBooking($_GET['id']);
                break;
            case 'delete':
                $this->deleteBooking($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }


    private function getListBooking()
    {
        $bookings = $this->model->getList();
        include 'views/admin/bookings/list.view.php';
    }
    private function editBooking($id)
    {
        // Lấy thông tin đặt phòng dựa trên ID
        $data = $this->model->getBookingEditById($id);
        $booking = $data->fetch_assoc();
        if (!$booking) {
            // Xử lý khi không tìm thấy đặt phòng
            $this->libs->redirectPage('admin.php?controller=bookings&action=list');
        }

        if (isset($_POST['update'])) {
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            // Thực hiện cập nhật thông tin đặt phòng
            $updateBooking = $this->model->updateBooking($id, $status);

            if ($updateBooking) {
                $this->libs->redirectPage('admin.php?controller=bookings&action=list');
            }
        }

        include 'views/admin/bookings/edit.view.php';
    }

    private function deleteBooking($id)
    {
        $this->model->deleteBooking($id);
        $this->libs->redirectPage('admin.php?controller=bookings&action=list');
    }
}
