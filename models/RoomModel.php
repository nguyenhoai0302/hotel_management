<?php
include_once 'config/database.php';

class RoomModel extends ConnectDB
{

    //lấy ra room
    function getRoomById($id) {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //edit room
    function editRoom($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $created_at,$update_at) {
        $sql = "UPDATE rooms SET name = '$name', bedroom = '$bedroom', bathroom = '$bathroom', livingroom ='$livingroom', type = '$type', price = '$price', tax = '$tax', cleaning_fee = '$cleaning_fee',description = '$description',status = '$status',created_at = '$created_at', updated_at = '$update_at' WHERE id = $id";
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
        // $sml = "DELETE FROM bookings WHERE room_id = $id";
        $sql = "DELETE FROM rooms WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }

    function create( $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $created_at)
    {
        // $checkRoomExist = $this->checkRoomExist($id);
        // if($checkRoomExist->num_rows == 0) {
            $sql = "INSERT INTO rooms( name, bedroom, bathroom, livingroom, type, price, tax, cleaning_fee, description, status, created_at)VALUES('$name', '$bedroom', '$bathroom', '$livingroom', '$type', '$price', '$tax', '$cleaning_fee', '$description', '$status', '$created_at')";
            return mysqli_query($this->connect(),$sql);
        // }
        // return false;
    }
    function checkRoomExist($id) {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }
    function totalRoom()
    {
        $sql = "SELECT COUNT(id) AS total_room FROM rooms";

        return mysqli_query($this->connect(),$sql);
    }
}

?>