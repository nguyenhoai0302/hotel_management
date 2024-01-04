<!-- <?php
        include 'models/BookingModel.php';
        include 'utils/helpers.php';
        class RoomController
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
                    case 'create':
                        $this->createBooking();
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
                $bookings = $this->model->getList(); // Lấy toàn bộ user từ database.
                include 'views/admin/bookings/list.view.php'; // views đã có giá trị users
            }

            private function createBooking()
            {
                if (isset($_POST['create'])) {
                    $userId = filter_input(INPUT_POST, 'userid', FILTER_SANITIZE_STRING);
                    $roomId = filter_input(INPUT_POST, 'roomid', FILTER_SANITIZE_STRING);
                    $dateIn = filter_input(INPUT_POST, 'dateIn', FILTER_SANITIZE_STRING);
                    $dateOut = filter_input(INPUT_POST, 'dateOut', FILTER_SANITIZE_STRING);
                    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
                    $totalPrice = filter_input(INPUT_POST, 'totalPrice', FILTER_SANITIZE_STRING);
                    $note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);

                    if ($userId != '' && $roomId != '' && $dateIn != '' && $dateOut != '' && $status != '' && $totalPrice != '') {
                        // Thực hiện tạo đặt phòng mới
                        $createBooking = $this->model->createBooking($userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note);
                        if ($createBooking) {
                            $this->libs->redirectPage('admin.php?controller=bookings&action=list');
                        }
                    }
                }
                include 'views/admin/rooms/create.booking.view.php';
            }

            private function editBooking($id)
            {
                // Lấy thông tin đặt phòng dựa trên ID
                $booking = $this->model->getBookingById($id);
                if (!$booking) {
                    // Xử lý khi không tìm thấy đặt phòng
                }

                if (isset($_POST['update'])) {
                    $userid = filter_input(INPUT_POST, 'userid', FILTER_SANITIZE_STRING);
                    $roomid = filter_input(INPUT_POST, 'roomid', FILTER_SANITIZE_STRING);
                    $dateIn = filter_input(INPUT_POST, 'dateIn', FILTER_SANITIZE_STRING);
                    $dateOut = filter_input(INPUT_POST, 'dateOut', FILTER_SANITIZE_STRING);
                    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
                    $totalPrice = filter_input(INPUT_POST, 'totalPrice', FILTER_SANITIZE_STRING);
                    $note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);

                    // Thực hiện cập nhật thông tin đặt phòng
                    $updateBooking = $this->model->updateBooking($id, $userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note);

                    if ($updateBooking) {
                        $this->libs->redirectPage('admin.php?controller=bookings&action=list');
                    }
                }

                include 'views/admin/rooms/update.booking.model.php';
            }

            private function deleteBooking($id)
            {

                $this->model->deleteBooking($id);
                $this->libs->redirectPage('admin.php?controller=bookings&action=list');
            }
        }
