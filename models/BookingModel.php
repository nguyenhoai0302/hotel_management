<?php
include_once 'config/database.php';

class BookingModel extends ConnectDB
{

    //lấy ra user
    function getUserById($id)
    {
        $sql = "SELECT * FROM users WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //edit user
    // function editUser($id, $name, $email, $phone, $role, $gender, $birthday, $avatar, $password, $updated_at)
    // {
    //     $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', role = '$role', gender ='$gender', birthday = '$birthday', avatar = '$avatar', password = '$password', updated_at = '$updated_at' WHERE id = $id";
    //     return mysqli_query($this->connect(), $sql);
    // }

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

    // function getUser($id)
    // {
    //     $sql = "SELECT * FROM users WHERE id = $id";
    //     return mysqli_query($this->connect(), $sql);
    // }

    function deleteBooking($id)
    {
        $sql = "DELETE FROM bookings WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }
}
