<!-- <?php
        // include 'models/BookingModel.php';
        // include 'utils/helpers.php';

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
                $bookings = $this->model->getList(); // Lấy toàn bộ user từ database.
                include 'views/admin/bookings/list.view.php'; // views đã có giá trị users
            }
            private function editBooking($id)
            {
                // Lấy thông tin đặt phòng dựa trên ID
                $bookings = $this->model->getBookingById($id);
                if (!$bookings) {
                    // Xử lý khi không tìm thấy đặt phòng
                }

                if (isset($_POST['update'])) {
                    $userId = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_STRING);
                    $roomId = filter_input(INPUT_POST, 'roomId', FILTER_SANITIZE_STRING);
                    $dateIn = filter_input(INPUT_POST, 'checkIndate', FILTER_SANITIZE_STRING);
                    $dateOut = filter_input(INPUT_POST, 'checkOutdate', FILTER_SANITIZE_STRING);
                    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
                    $totalPrice = filter_input(INPUT_POST, 'total_rice', FILTER_SANITIZE_STRING);
                    $note = filter_input(INPUT_POST, 'note', FILTER_SANITIZE_STRING);
                    $createdAt = filter_input(INPUT_POST, 'created_at', FILTER_SANITIZE_STRING);
                    $updatedAt = filter_input(INPUT_POST, 'updated_at', FILTER_SANITIZE_STRING);

                    // Thực hiện cập nhật thông tin đặt phòng
                    $updateBooking = $this->model->updateBooking($id, $userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note, $createdAt, $updatedAt);

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
