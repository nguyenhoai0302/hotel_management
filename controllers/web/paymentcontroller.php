 <?php
    include_once 'models/BookingModel.php';
    include_once 'models/PaymentModel.php';
    include_once 'utils/helpers.php';

    class PaymentController
    {
        private $bookingModel;
        private $paymentModel;
        private $libs;

        public function __construct()
        {
            $this->bookingModel = new BookingModel();
            $this->paymentModel = new PaymentModel();
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
                    break;
            }
        }

        private function processPayment($bookingId)
        {
            $query = $this->bookingModel->getBookingById($bookingId);
            $booking = $query->fetch_assoc();

            $days = $this->calDays($booking['checkin_date'], $booking['checkout_date']);

            $amount = $booking['total_price'] + $booking['room_tax'] + $booking['cleaning_fee'];

            if (isset($_POST['payment'])) {
                $paymentDate = filter_input(INPUT_POST, 'payment_date', FILTER_SANITIZE_STRING);
                $amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);
                $paymentMethod = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);
                $status = 1; //Success;

                $this->paymentModel->storePayment($bookingId, $paymentDate, $amount, $paymentMethod, $status);
                $this->libs->redirectPage('index.php');
            }
            require_once './views/web/bookings/payment.view.php';
        }

        private function calDays($start, $end)
        {
            $startDate = new DateTime($start);
            $endDate = new DateTime($end);

            return $startDate->diff($endDate)->days;
        }
    }
