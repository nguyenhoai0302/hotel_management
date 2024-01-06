<?php
include_once 'config/database.php';

class RoomModel extends ConnectDB
{

    //lấy ra user
    function getRoomById($id) {
        $sql = "SELECT * FROM room WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //edit user
    function editRoom($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $update_at, $created_at) {
        $sql = "UPDATE room SET id = '$id', name = '$name', bedroom = '$bedroom', bathroom = '$bathroom', livingroom ='$livingroom', type = '$type', price = '$price', tax = '$tax', cleaning_fee = '$cleaning_fee',description = '$description',status = '$status',update_at = '$update_at',created_at = '$created_at' WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }

    function getList() {
        $sql = "SELECT * FROM rooms";
        return mysqli_query($this->connect(),$sql);
    }

    function getRoom($id) {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }
    
    //deleta user
    function delete($id) {
        $del = "DELETE FROM bookings WHERE room_id = $id";
        $sql = "DELETE FROM rooms WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }

}

?>