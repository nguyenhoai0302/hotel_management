<!-- <?php
        // include 'models/BookingModel.php';
        // include 'utils/helpers.php';
        class PaymentController
        {
            private $model;
            private $libs;

            public function __construct()
            {
                $this->model = new PaymentModel();
                $this->libs = new LibCommon();
            }
            function handleRequest()
            {
                $action = isset($_GET['action']) ? $_GET['action'] : 'list';

                switch ($action) {
                    case 'list':
                        $this->getListPayment();
                        break;
                        // case 'create':
                        //     $this->createBooking();
                        //     break;
                    case 'edit':
                        $this->editPayment($_GET['id']);
                        break;
                    case 'delete':
                        $this->deletePayment($_GET['id']);
                        break;
                    default:
                        # code...
                        break;
                }
            }

            private function getListPayment()
            {
                $payments = $this->model->getList(); // Lấy toàn bộ user từ database.
                include 'views/admin/payments/list.view.php'; // views đã có giá trị users
            }
            private function editPayment($id)
            {
                // Lấy thông tin đặt phòng dựa trên ID
                $payments = $this->model->getPaymentById($id);
                if (!$payments) {
                    // Xử lý khi không tìm thấy đặt phòng
                }

                if (isset($_POST['update'])) {
                    $bookingId = filter_input(INPUT_POST, 'bookingId', FILTER_SANITIZE_STRING);
                    $paymentDate = filter_input(INPUT_POST, 'paymentDate', FILTER_SANITIZE_STRING);
                    $Amount = filter_input(INPUT_POST, 'Amount', FILTER_SANITIZE_STRING);
                    $PaymentMethod = filter_input(INPUT_POST, 'PaymentMethod', FILTER_SANITIZE_STRING);
                    $createdAt = filter_input(INPUT_POST, 'created_at', FILTER_SANITIZE_STRING);
                    $updatedAt = filter_input(INPUT_POST, 'updated_at', FILTER_SANITIZE_STRING);

                    // Thực hiện cập nhật thông tin đặt phòng
                    $updatePayment = $this->model->updatePayment($id, $bookingId, $paymentDate, $Amount, $PaymentMethod, $createdAt, $updatedAt);

                    if ($updatePayment) {
                        $this->libs->redirectPage('admin.php?controller=payments&action=list');
                    }
                }

                include 'views/admin/payments/edit.view.php';
            }

            private function deletePayment($id)
            {

                $this->model->deletePayment($id);
                $this->libs->redirectPage('admin.php?controller=bookings&action=list');
            }
        }
