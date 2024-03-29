<?php
include_once 'config/database.php';

class RoomModel extends ConnectDB
{
    function create($name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status)
    {
        $sql = "INSERT INTO rooms(`name`, bedroom, bathroom, livingroom, `type`, price, tax, cleaning_fee, description, status)
            VALUES('$name', '$bedroom', '$bathroom', '$livingroom', '$type', '$price', '$tax', '$cleaning_fee', '$description', '$status')";

        return mysqli_query($this->connect(), $sql);
    }

    function getRoomById($id)
    {
        $sql = "SELECT rooms.id, rooms.name, rooms.bedroom, rooms.bathroom, rooms.livingroom,
        rooms.type, rooms.price, rooms.tax, rooms.cleaning_fee,
        rooms.description, rooms.status, rooms.updated_at, rooms.created_at,
        room_images.image
        FROM rooms
        LEFT JOIN room_images ON rooms.id = room_images.room_id
        WHERE rooms.id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function editRoom($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status)
    {
        $sql = "UPDATE rooms SET name = '$name', bedroom = '$bedroom', bathroom = '$bathroom', livingroom ='$livingroom', `type` = '$type', price = '$price', tax = '$tax', cleaning_fee = '$cleaning_fee', description = '$description', status = '$status' WHERE id = $id";

        return mysqli_query($this->connect(), $sql);
    }

    function getList()
    {
        $sql = "SELECT * FROM rooms ORDER BY created_at DESC";

        return mysqli_query($this->connect(), $sql);
    }

    function delete($id)
    {
        $del = "DELETE FROM bookings WHERE room_id = $id";
        $sql = "DELETE FROM rooms WHERE id = $id";

        // Bạn có thể muốn thực hiện xóa các đặt phòng trước khi xóa phòng.
        mysqli_query($this->connect(), $del);

        return mysqli_query($this->connect(), $sql);
    }

    function totalRoom()
    {
        $sql = "SELECT COUNT(id) AS total_room FROM rooms";

        return mysqli_query($this->connect(), $sql);
    }

    function getLastId()
    {
        $sql = "SELECT id FROM rooms ORDER BY created_at DESC LIMIT 1";
        return mysqli_query($this->connect(), $sql);
    }

    function getOptionRoom()
    {
        $sql = "SELECT id, `name` FROM rooms";
        return mysqli_query($this->connect(), $sql);
    }

    function getListRoomHomePage()
    {
        $sql = "SELECT rooms.id, rooms.name, rooms.bedroom, rooms.bathroom, rooms.livingroom,
        rooms.price, room_images.image AS `image`
        FROM rooms
        LEFT JOIN room_images ON rooms.id = room_images.room_id
        GROUP BY rooms.id
        ORDER BY rooms.created_at DESC LIMIT 3";

        return mysqli_query($this->connect(), $sql);
    }

    function getListRoom()
    {
        $sql = "SELECT rooms.id, rooms.name, rooms.bedroom, rooms.bathroom, rooms.livingroom,
        rooms.price, room_images.image AS `image`
        FROM rooms
        LEFT JOIN room_images ON rooms.id = room_images.room_id
        GROUP BY rooms.id
        ORDER BY rooms.created_at DESC LIMIT 11 ";

        return mysqli_query($this->connect(), $sql);
    }

    function getDetailById($id)
    {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function searchRoomByKeyword($keyword)
    {
        $sql = "SELECT rooms.id, rooms.name, rooms.bedroom, rooms.bathroom, rooms.livingroom,
        rooms.price, room_images.image AS `image`
        FROM rooms
        LEFT JOIN room_images ON rooms.id = room_images.room_id
        WHERE rooms.name LIKE '%$keyword%'
        GROUP BY rooms.id
        ORDER BY rooms.created_at ";

        return mysqli_query($this->connect(), $sql);
    }

}
?>
