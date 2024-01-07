<?php
include_once 'config/database.php';

class ReviewModel extends ConnectDB
{
    function create($id, $user_id, $room_id, $status, $content)
    {
        $checkReviewExist = $this->checkReviewExist($id);
        if ($checkReviewExist->num_rows == 0) {
            $sql = "INSERT INTO reviews(id, user_id, room_id, status, content) VALUES ('$id', '$user_id', '$room_id', '$status', '$content')";
            return mysqli_query($this->connect(), $sql);
        }
        return false;
    }

    function checkReviewExist($id)
    {
        $sql = "SELECT * FROM reviews WHERE id = '$id'";
        return mysqli_query($this->connect(), $sql);
    }

    function getList()
    {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, reviews.id, reviews.content, reviews.status, reviews.updated_at 
        FROM reviews
        JOIN users
        ON reviews.user_id = users.id
        JOIN rooms
        ON reviews.room_id = rooms.id";

        return mysqli_query($this->connect(), $sql);
    }

    //lấy ra review 
    function getReviewById($id)
    {
        $sql = "SELECT users.name AS user_name, rooms.name AS room_name, reviews.id, reviews.content, reviews.status, reviews.updated_at 
        FROM reviews
        JOIN users ON reviews.user_id = users.id
        JOIN rooms ON reviews.room_id = rooms.id
        WHERE reviews.id = $id";
        return mysqli_query($this->connect(), $sql);
    }


    function getReview($id)
    {
        $sql = "SELECT * FROM reviews WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //edit review 
    function editReview($id, $user_id, $room_id, $content, $status, $updated_at)
    {

        $sql = "UPDATE reviews SET user_id = '$user_id', room_id = '$room_id', status = '$status', content = '$content', updated_at ='$updated_at' WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    //deleta review
    function deleteReview($id)
    {
        $sql = "DELETE FROM reviews WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    // count total review
    function totalReview()
    {
        $sql = "SELECT COUNT(id) AS total_review FROM reviews";

        return mysqli_query($this->connect(), $sql);
    }
}
