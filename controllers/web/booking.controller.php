 <?php 
    class BookingController
    {
        private $model;

        public function __construct()
    {
    $this->model = new BookingModel();
    }

    public function bookRoom($userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note)
    {
        return $this->model->bookRoom($userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note);
    }

    public function getBooking($id)
    {
       return $this->model->getBooking($id);
    }

    public function updateBooking($id, $userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note)
    {
    return $this->model->updateBooking($id, $userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note);
    }

    public function deleteBooking($id)
    {
        return $this->model->deleteBooking($id);
    }

    public function getAllBookings()
    {
        return $this->model->getAllBookings();
    }

 }
?>