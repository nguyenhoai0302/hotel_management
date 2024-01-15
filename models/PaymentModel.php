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

    function bill($booking_id, $total_price)
    {
        global $connection;
        $query = "INSERT INTO bill (booking_id,date,total_price)  VALUE(:booking_id, :date,:total_price)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':booking_id', $booking_id, PDO::PARAM_INT);
        $statement->bindValue(":date", date("Y-m-d H:i:s"));
        $statement->bindParam(':total_price', $total_price);
        $statement->execute();
        $payment_id = $connection->lastInsertId();
        return $payment_id;
    }
}
