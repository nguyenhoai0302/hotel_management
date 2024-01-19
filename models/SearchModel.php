<?php

class RoomModel {
    public static function searchRooms($keyword) {
        $sql = "SELECT * FROM rooms WHERE name = $name";
        return mysqli_query($this->connect(),$sql);
    }
}
