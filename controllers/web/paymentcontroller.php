 <?php
    include_once 'models/RoomModel.php';
    include_once 'models/RoomImageModel.php';
    include_once 'utils/helpers.php';

    class paymentController
    {
        private $roomModel;
        private $libs;

        public function __construct()
        {
            $this->roomModel = new RoomModel();
            $this->libs = new LibCommon();
        }

        public function handleRequest()
        {
            $action = isset($_GET['action']) ? $_GET['action'] : 'payment';

            switch ($action) {
                case 'payment':
                    $this->processPayment($_GET['bookingId']);
                    break;
                default:
                    // Handle unknown action
                    break;
            }
        }

        private function processPayment($bookingId)
        {
            if (isset($_SESSION['login'])) {
                $userName = $_SESSION['login']['name'];
                $userId = $_SESSION['login']['id'];
            } else {
                $userName = $userId = null;
            }
            if (isset($_POST['payment'])) {
                $paymentDate = filter_input(INPUT_POST, 'payment_date', FILTER_SANITIZE_STRING);
                $Amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);
                $paymentMethod = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);
                $status = 1;

                $checkInDateObj = new DateTime($checkIn);
                $checkOutDateObj = new DateTime($checkOut);

                $countDays = $this->calDays($checkIn, $checkOut);


                $query = $this->RoomModel->getRoomById($roomId);
                $room = $query->fetch_assoc();
                $totalPrice = $room['price'] * $countDays;

                $result = $this->bookingModel->storeBooking($bookingId, $Amount, $paymentMethod, $paymentDate, $status);
                if ($result) {
                    $query = $this->paymentModel->getLastPaymentId();
                    $booking = $query->fetch_assoc();
                    $bookingId = $payment['id'];
                    $this->libs->redirectPage('index.php?controller=payments&action=payment&bookingId=' . $paymentId);
                }
            }

            require_once './views/web/bookings/payment.view.php';
        }
    }
