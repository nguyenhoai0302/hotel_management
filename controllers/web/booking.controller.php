 <?php
    class BookingController
    {
        private $model;

        public function __construct()
        {
            $this->model = new BookingModel();
        }

        public function getListBooking($userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note, $updatedAt, $createdAt)
        {
            return $this->model->getList($userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note, $updatedAt, $createdAt);
        }

        public function getBooking($id)
        {
            return $this->model->getBooking($id);
        }

        public function editBooking($id, $userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note, $updatedAt, $createdAt)
        {
            return $this->model->updateBooking($id, $userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note, $updatedAt, $createdAt);
        }

        public function deleteBooking($id)
        {
            return $this->model->deleteBooking($id);
        }

    }
    ?>


