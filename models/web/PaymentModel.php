<?php
include 'config/database.php';

class PaymentModel extends ConnectDB
{
    function getList()
    {
        $sql = "SELECT * FROM payments";
        return mysqli_query($this->connect(), $sql);
    }

    function getPaymentById($id)
    {
        $sql = "SELECT * FROM payments WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function updatePayment($id, $bookingId, $paymentDate, $Amount, $PaymentMethod,  $updatedAt, $createdAt)
    {
        $sql = "UPDATE payments SET bookingId = '$bookingId', paymentDate = '$paymentDate',Amount  = '$Amount', PaymentMethod = '$PaymentMethod',  updated_at = '$updatedAt', created_at ='$createdAt' WHERE id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function getPayment($id)
    {
        $sql = "SELECT * FROM payments WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function deletePayment($id)
    {
        $sql = "DELETE FROM payments WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }
}
