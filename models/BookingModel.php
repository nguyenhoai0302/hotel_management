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

    function getNextDateTime()
    {
        $currentDateTime = new DateTime('now');
        $currentDate = $currentDateTime->format('Y-m-d H:i');
        $nextDateTime =  date_add($currentDateTime, date_interval_create_from_date_string("1 days"));
        $nextDate = date_format($nextDateTime, "Y-m-d H:i");
        return $nextDate;
    }
    function getMaxCheckInDateTime()
    {
        $currentDateTime = new DateTime('now');
        $currentDate = $currentDateTime->format('Y-m-d H:i');
        $nextDateTime =  date_add($currentDateTime, date_interval_create_from_date_string("30 days"));
        $nextDate = date_format($nextDateTime, "Y-m-d H:i");
        return $nextDate;
    }
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['checkin_date']) && !empty($_POST['checkout_date']) && isset($_POST['note'])) {
    //     $checkin_date = $_POST['checkin_date'];
    //     $checkout_date = $_POST['checkout_date'];
    //     $note = $_POST['note'];
    //     $users_id = $_SESSION['users_id'];
    //     $date = date('Y-m-d H:i:s');
    //     $total_price = $_POST['total_price'];
    //     global $booking;
    //     $booking = bookings($rooms_id, $users_id, $checkout_date, $checkin_date, $note);
    //     if ($booking) {
    //         $payment = payments($booking, $date, $total_price);
    //         $payment_information = get_information_payments($booking, $_SESSION['id']);
    //         header("Location:/payments");
    //         echo "<script>alert('" . "Booking successful" . "');</script>";
    //     }
    // } else {
    //     echo "<script>alert('" . "Booking Unsuccessful" . "');</script>";
    // }

}
