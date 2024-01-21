<?php
require_once "./models/RoomModel.php";
require_once "./models/BookingModel.php";
class bookingController
{
    private $RoomModel;
    private $bookingModel;
    private $libs;

    public function __construct()
    {
        $this->RoomModel = new RoomModel();
        $this->bookingModel = new BookingModel();
        $this->libs = new LibCommon();
    }


    public function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'booking';

        switch ($action) {
            case 'booking':
                $this->handleBooking($_GET['roomId']);
                break;
            default:
                break;
        }
    }
    private function handleBooking($roomId)
    {
        if (isset($_SESSION['login'])) {
            $userName = $_SESSION['login']['name'];
            $userId = $_SESSION['login']['id'];
        } else {
            $userName = $userId = null;
            $this->libs->redirectPage('index.php?controller=auth&action=register');
            return;
        }
        if (isset($_POST['booking'])) {
            $checkIn = filter_input(INPUT_POST, 'checkin_date', FILTER_SANITIZE_STRING);
            $checkOut = filter_input(INPUT_POST, 'checkout_date', FILTER_SANITIZE_STRING);
            $note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
            $status = 1;

            $checkInDateObj = new DateTime($checkIn);
            $checkOutDateObj = new DateTime($checkOut);

            $checkInDate = $checkInDateObj->format('Y-m-d H:i:s');
            $checkOutDate = $checkOutDateObj->format('Y-m-d H:i:s');

            $countDays = $this->calDays($checkIn, $checkOut);


            $query = $this->RoomModel->getRoomById($roomId);
            $room = $query->fetch_assoc();
            $totalPrice = $room['price'] * $countDays;

            $result = $this->bookingModel->storeBooking($userId, $roomId, $checkInDate, $checkOutDate, $totalPrice, $status, $note);
            if ($result) {
                $query = $this->bookingModel->getLastBookingId();
                $booking = $query->fetch_assoc();
                $bookingId = $booking['id'];
                $this->libs->redirectPage('index.php?controller=payments&action=payment&bookingId=' . $bookingId);
            }
        }


        require_once './views/web/bookings/booking.view.php';
    }

    private function calDays($start, $end)
    {
        $startDate = new DateTime($start);
        $endDate = new DateTime($end);

        return $startDate->diff($endDate)->days;
    }
}
