<?php
include_once 'config/database.php';

class RoomImageModel extends ConnectDB
{
    function create($roomId, $image) {
        $sql = "INSERT INTO room_images(room_id,image) VALUES('$roomId','$image')";

        return mysqli_query($this->connect(), $sql);
    }

    function deleteImagesByRoomId($roomId) {
        $sql = "DELETE FROM room_images WHERE room_id = $roomId";

        return mysqli_query($this->connect(), $sql);
    }
}

?>