<?php
require_once "./models/RoomImageModel.php";
require_once "./models/RoomModel.php";
require_once "./models/BookingModel.php";
class bookingController
{
    private $RoomModel;
    private $RoomImageModel;
    private $libs;

    public function __construct()
    {
        $this->RoomModel = new RoomModel();
        $this->RoomImageModel = new RoomImageModel();
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
        var_dump($roomId);
        die();
        require_once './views/web/bookings/booking.view.php';
    }
}
