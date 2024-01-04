<?php
include 'config/database.php';

class BookingModel extends ConnectDB
{
    // function createBooking($userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note)
    // {
    //     $sql = "INSERT INTO bookings (userid, roomid, datein, dateout, status, totalPrice, note) VALUES ('$userid', '$roomid', '$dateIn', '$dateOut', '$status', '$totalPrice', '$note')";
    //     return mysqli_query($this->connect(), $sql);
    // }

    function getList()
    {
        $sql = "SELECT * FROM bookings";
        return mysqli_query($this->connect(), $sql);
    }

    function getBookingById($id)
    {
        $sql = "SELECT * FROM bookings WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function updateBooking($id, $userid, $roomid, $dateIn, $dateOut, $status, $totalPrice, $note)
    {
        $sql = "UPDATE bookings SET userid = '$userid', roomid = '$roomid', datein = '$dateIn', dateout = '$dateOut', status = '$status', totalPrice = '$totalPrice', note = '$note' WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function deleteBooking($id)
    {
        $sql = "DELETE FROM bookings WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }
}
