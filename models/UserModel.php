<?php
include 'config/database.php';

class UserModel extends ConnectDB
{
    function register($name,$email,$avatar,$phone,$gender,$birthday,$role,$status,$password) {
        $checkUserExist = $this->checkUserExist($email);
        if($checkUserExist->num_rows == 0) {
            $sql = "INSERT INTO users(name,email,avatar,phone,gender,birthday,role,status,password)VALUES('$name','$email','$avatar','$phone','$gender','$birthday','$role','$status','$password')";
            return mysqli_query($this->connect(),$sql);
        }
        return false;
    }

    function checkUserExist($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";

        return mysqli_query($this->connect(),$sql);
    }

    function getList() {
        $sql = "SELECT * FROM users";
        return mysqli_query($this->connect(),$sql);
    }

    function getUser($id) {
        $sql = "SELECT * FROM users WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }

    function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }
}
?>