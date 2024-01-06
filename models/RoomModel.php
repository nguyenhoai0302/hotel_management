<?php
include 'config/database.php';

class RoomModel extends ConnectDB
{
    function register($id, $name, $bedroom, $bathroom, $livingroom, $type, $price, $tax, $cleaning_fee, $description, $status, $update_at, $create_at) {
        $checkUserExist = $this->checkUserExist($id);
        if($checkUserExist->num_rows == 0) {
            $sql = "INSERT INTO rooms (id, name, bedroom, bathroom, livingroom, type, price, tax, cleaning_fee, description, status, updated_at, created_at) VALUES('id', 'name', 'bedroom', 'bathroom', 'livingroom', 'type', 'price', 'tax', 'cleaning_fee', 'description', 'status', 'updated_at', 'created_at') ";
            return mysqli_query($this->connect(),$sql);
        }
        return false;
    }

    function checkUserExist($email) {
        $sql = "SELECT * FROM room WHERE email = '$email'";

        return mysqli_query($this->connect(),$sql);
    }

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
        $sql = "SELECT * FROM room";
        return mysqli_query($this->connect(),$sql);
    }

    function getRoom($id) {
        $sql = "SELECT * FROM room WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }
    
    //deleta user
    function deleteRoom($id) {
        $sql = "DELETE FROM room WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }


}

?>