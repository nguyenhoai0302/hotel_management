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

    function bill($booking_id, $date, $total_price)
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

    function get_information_payment($booking_id, $users_id)
    {
        global $connection;
        $query = "SELECT payments.id, payments.total_price, payments.date, users.name, rooms.id AS room_id, rooms.name AS room_name, rooms.total_price, bookings.id, bookings.checkin_date, bookings.checkout_date
        FROM payments
        INNER JOIN bookings ON payments.id_booking = bookings.id
        INNER JOIN rooms ON bookings.rooms_id = rooms_id.id
        INNER JOIN users ON bookings.users_id = users_id.id
        WHERE bookings.id =  :booking_id and  users_id.id = :users_id ;";
        $statement = $connection->prepare($query);
        $statement->bindParam(':booking_id', $booking_id, PDO::PARAM_INT);
        $statement->bindParam(':users_id', $users_id, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
