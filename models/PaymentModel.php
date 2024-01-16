<?php
include_once 'config/database.php';

class PaymentModel extends ConnectDB
{
    function getPaymentById($id)
    {
        $sql = "SELECT * FROM payments WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function getList()
    {
        $sql = "SELECT * FROM payments";
        return mysqli_query($this->connect(), $sql);
    }

    function deletePayment($id)
    {
        $sql = "DELETE FROM payments WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }
    /////
    function storePayment($bookingId, $paymentDate, $paymentMethod, $status, $Amount)
    {
        $sql = "INSERT INTO payments(booking_id, payment_date ,payment_method, amount, `status`, note) VALUES ('$bookingId', '$paymentDate', '$paymentMethod', '$status','$Amount')";

        return mysqli_query($this->connect(), $sql);
    }

    function getLastPaymentId()
    {
        $sql = "SELECT id FROM payments ORDER BY created_at DESC LIMIT 1";

        return mysqli_query($this->connect(), $sql);
    }
}
