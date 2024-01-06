<?php
include_once 'config/database.php';

class ReviewModel extends ConnectDB
{
    function register($name, $email, $avatar, $phone, $gender, $birthday, $role, $status, $password)
    {
        $checkUserExist = $this->checkUserExist($email);
        if ($checkUserExist->num_rows == 0) {
            $sql = "INSERT INTO users(name,email,avatar,phone,gender,birthday,role,status,password)VALUES('$name','$email','$avatar','$phone','$gender','$birthday','$role','$status','$password')";
            return mysqli_query($this->connect(), $sql);
        }
        return false;
    }

    function checkUserExist($email)
    {
        $sql = "SELECT * FROM users WHERE email = '$email'";

        return mysqli_query($this->connect(), $sql);
    }

    //edit review 
    function editReview($id, $userId, $roomId, $content, $updated_at, $created_at)
    {
        $sql = "UPDATE reviews SET userId = '$userId', roomId = '$roomId', content = '$content', updated_at = '$updated_at', created_at ='$created_at' WHERE id = $id";
        return mysqli_query($this->connect(), $sql);
    }

    function getList()
    {
        $sql = "SELECT * FROM reviews";
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
}
