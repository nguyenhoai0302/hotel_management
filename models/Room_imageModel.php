<?php
include_once 'config/database.php';

class Room_imageModel extends ConnectDB
{
    function create($id, $room_id,$image)
    {
        $checkRoom_imageExist = $this->checkRoom_imageExist($id);
        if($checkRoom_imageExist->num_rows == 0) {
            $sql = "INSERT INTO room_images(id, room_id, image) VALUES ('$id', '$room_id', '$image')";
            return mysqli_query($this->connect(),$sql);
        }
        return false;
    }

    function checkRoom_imageExist($id) 
    {
        $sql = "SELECT * FROM room_images WHERE id = '$id'";
        return mysqli_query($this->connect(),$sql);
    }

    function getList()
    {
        $sql = "SELECT rooms.name AS room_name, room_images.id, room_images.updated_at 
        FROM room_images
        JOIN rooms
        ON room_images.room_id = rooms.id";

        return mysqli_query($this->connect(), $sql);
    }

    //lấy ra review 
    function getRoom_imageById($id) {
        $sql = "SELECT rooms.name AS room_name, room_images.id, room_images.updated_at 
        FROM room_images
        JOIN rooms ON room_images.room_id = rooms.id
        WHERE room_images.id = $id";
        return mysqli_query($this->connect(), $sql);
    }
    

    function getRoom_image($id)
    {
        $sql = "SELECT * FROM room_images WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //edit review 
    function editRoom_image($id, $image, $updated_at)
    {
        $sql = "UPDATE room_images SET `image` = '$image', updated_at ='$updated_at' WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //deleta review
    function deleteRoom_image($id)
    {
        $sql = "DELETE FROM room_images WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    // count total review
    function totalRoom_image()
    {
        $sql = "SELECT COUNT(id) AS total_room_image FROM room_images";

        return mysqli_query($this->connect(),$sql);
    }
}
