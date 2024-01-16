<?php
require("./models/PaymentModel.php");
require("./models/BookingModel.php");

class PaymentController
{
    public function __construct()
    {

        require("./views/web/bookings/payment.view.php");
    }
}
