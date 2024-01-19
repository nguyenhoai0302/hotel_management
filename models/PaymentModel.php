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
    // WEB
    function storePayment($bookingId, $paymentDate, $amount, $paymentMethod, $status)
    {
        $sql = "INSERT INTO payments (booking_id, payment_date, amount, payment_method,  `status`) 
        VALUES('$bookingId', '$paymentDate', '$amount', '$paymentMethod', '$status')";
        return mysqli_query($this->connect(), $sql);
    }

    function getLastPaymentId()
    {
        $sql = "SELECT id FROM payments ORDER BY created_at DESC LIMIT 1";

        $result = mysqli_query($this->connect(), $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['id'];
        }

        return null;
    }
}
