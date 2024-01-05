
<?php
include 'config/database.php';

class BookingModel extends ConnectDB
{
    function getList()
    {

        $sql = "SELECT * FROM bookings";
        echo 'home page';
        return mysqli_query($this->connect(), $sql);
    }

    function getBookingById($id)
    {
        $sql = "SELECT * FROM bookings WHERE id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function updateBooking($id, $userId, $roomId, $dateIn, $dateOut, $status, $totalPrice, $note, $updatedAt, $createdAt)
    {
        $sql = "UPDATE bookings SET userid = '$userId', roomid = '$roomId',checkIndate  = '$dateIn', checkOutdate = '$dateOut', status = '$status', total_price  = '$totalPrice', note = '$note' updated_at = '$updatedAt', created_at ='$createdAt' WHERE id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function getBooking($id)
    {
        $sql = "SELECT * FROM bookings WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function deleteBooking($id)
    {
        $sql = "DELETE FROM bookings WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }
}
