<?php
session_start();
require("./models/PaymentModel.php");
require("./models/BookingModel.php");

class PaymentController
{
    public function __construct()
    {
        if (isset($_GET['id'])) {
            $booking_id = $_GET['id'];
            echo "<script>console.log('" . $booking_id . "');</script>";
            echo "<script>console.log('" . $_SESSION['id'] . "');</script>";
        }

        require("app/Views/bill/bill.view.php");
    }
}

$paymentController = new PaymentController();
