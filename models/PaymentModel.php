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
}
