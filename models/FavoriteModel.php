<?php
include_once 'config/database.php';

class FavoriteModel extends ConnectDB
{
    function create($id, $user_id, $room_id)
    {
        $checkFavoriteExist = $this->checkFavoriteExist($id);
        if($checkFavoriteExist->num_rows == 0) {
            $sql = "INSERT INTO favorites(id, user_id, room_id) VALUES ('$id', '$user_id', '$room_id')";
            return mysqli_query($this->connect(),$sql);
        }
        return false;
    }

    function checkFavoriteExist($id) 
    {
        $sql = "SELECT * FROM favorites WHERE id = '$id'";
        return mysqli_query($this->connect(),$sql);
    }

    function getList()
    {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, favorites.id
        FROM favorites
        JOIN users
        ON favorites.user_id = users.id
        JOIN rooms
        ON favorites.room_id = rooms.id";

        return mysqli_query($this->connect(), $sql);
    }

    //lấy ra review 
    function getFavoriteById($id) {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, favorites.id
        FROM favorites
        JOIN users ON favorites.user_id = users.id
        JOIN rooms ON favorites.room_id = rooms.id
        WHERE favorites.id = $id";
        return mysqli_query($this->connect(), $sql);
    }
    

    function getFavorite($id)
    {
        $sql = "SELECT * FROM favorites WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }


    // count total review

}