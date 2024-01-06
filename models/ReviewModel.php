<?php
include_once 'config/database.php';

class ReviewModel extends ConnectDB
{
    //edit review 
    function editReview($id, $userId, $roomId, $content, $updated_at, $created_at)
    {
        $sql = "UPDATE reviews SET userId = '$userId', roomId = '$roomId', content = '$content', updated_at = '$updated_at', created_at ='$created_at' WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function getList()
    {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, reviews.id, reviews.content, reviews.status, reviews.created_at 
        FROM reviews
        JOIN users
        ON reviews.user_id = users.id
        JOIN rooms
        ON reviews.room_id = rooms.id";

        return mysqli_query($this->connect(), $sql);
    }

    function getReview($id)
    {
        $sql = "SELECT * FROM reviews WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //deleta user
    function deleteReview($id)
    {
        $sql = "DELETE FROM reviews WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function totalReview()
    {
        $sql = "SELECT COUNT(id) AS total_review FROM reviews";

        return mysqli_query($this->connect(),$sql);
    }
}
