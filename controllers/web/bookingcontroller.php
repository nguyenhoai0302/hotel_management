<?php
session_start();

class BookingController
{
    public function handleRequest()
    {
        require_once "./models/PaymentModel.php";
        require_once "./models/BookingModel.php";
        require_once "../../views/web/bookings/history_booking.view.php";

        if (isset($_GET['rooms_id'])) {
            $rooms_id = $_GET['rooms_id'];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['checkin_date']) && !empty($_POST['checkout_date']) && isset($_POST['note'])) {
            $checkin_date = $_POST['checkin_date'];
            $checkout_date = $_POST['checkout_date'];
            $note = $_POST['note'];
            $users_id = $_SESSION['users_id'];
            $date = date('Y-m-d H:i:s');
            $total_price = $_POST['total_price'];
            $booking = bookings($rooms_id, $users_id, $checkin_date, $checkout_date, $note);
            echo "<script>console.log(" . $booking . ");</script>";
            if ($booking) {
                $payment = payments($booking, $date, $total_price);
                header("Location: /payment?id=$booking");
                echo "<script>alert('" . "Booking successful" . "');</script>";
                exit;
            } else {
                echo "<script>alert('" . "Booking Unsuccessful" . "');</script>";
            }
        }

        require_once '../../views/web/bookings/payment.view.php';
    }
}

$bookingcontroller = new BookingController();
$bookingcontroller->handleRequest();
