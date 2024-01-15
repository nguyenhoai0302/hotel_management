<?php
include_once 'config/database.php';

class BookingModel extends ConnectDB
{
    function getList()
    {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, bookings.id, bookings.checkin_date, bookings.checkout_date, bookings.total_price, bookings.status, bookings.created_at 
        FROM bookings
        JOIN users
        ON bookings.user_id = users.id
        JOIN rooms
        ON bookings.room_id = rooms.id";

        return mysqli_query($this->connect(), $sql);
    }

    function getBookingById($id)
    {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, bookings.id, bookings.checkin_date, bookings.checkout_date, bookings.total_price, bookings.status, bookings.created_at 
        FROM bookings
        JOIN users
        ON bookings.user_id = users.id
        JOIN rooms
        ON bookings.room_id = rooms.id
        WHERE bookings.id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function getBookingEditById($id)
    {
        $sql = "SELECT bookings.status FROM bookings WHERE id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function deleteBooking($id)
    {
        $sql = "DELETE FROM bookings WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function updateBooking($id, $status)
    {
        $sql = "UPDATE bookings SET status = '$status' WHERE id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function totalBooking()
    {
        $sql = "SELECT COUNT(id) AS total_booking FROM bookings";

        return mysqli_query($this->connect(), $sql);
    }


    function booking($users_id, $rooms_id, $checkin_date, $checkout_date, $status, $total_price, $created_at, $note)
    {
        global $connection;
        $query = "INSERT INTO bookings (users_id, rooms_id, checkin_date, checkout_date, status,total_price,note, created_at)  VALUE(:room_id, :user_id,:checkin_date, :checkout_date,:status,:created_at,:total_price,note)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':room_id', $rooms_id, PDO::PARAM_INT);
        $statement->bindParam(':user_id', $users_id, PDO::PARAM_INT);
        $statement->bindParam(':checkin_date', $checkin_date);
        $statement->bindParam(':checkout_date', $checkout_date);
        $statement->bindParam(':created_at', $created_at);
        $statement->bindParam(':total_price', $total_price);
        $statement->bindParam(':status', $status);
        $statement->bindParam(':note', $note, PDO::PARAM_STR);
        $statement->execute();
        $id = $connection->lastInsertId();
        return $id;
    }
}
