<?php
include_once 'config/database.php';

class UserModel extends ConnectDB
{
    function register($name,$email,$avatar,$phone,$gender,$birthday,$role,$status,$password) {
        $checkUserExist = $this->checkUserExist($email);
        if($checkUserExist->num_rows == 0) {
            $sql = "INSERT INTO users (name,email,avatar,phone,gender,birthday,role,status,password) VALUES ('$name','$email','$avatar','$phone','$gender','$birthday','$role','$status','$password')";
            return mysqli_query($this->connect(),$sql);
        }
        return false;
    }

    // Đăng xuất
    // function logout()
    // {
    //     session_start();
    //     session_destroy();
    // }

    // lấy re email 
    function checkUserExist($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return mysqli_query($this->connect(),$sql);
    }

    //lấy ra user
    // function getUserById($id) {
    //     $sql = "SELECT * FROM users WHERE id = $id";
    //     return mysqli_query($this->connect(), $sql);
    // }

    //edit user
    function editUser($id,$name,$email,$phone,$role,$gender,$status,$birthday,$avatar,$password,$updated_at) {
        $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', role = '$role', gender ='$gender', birthday = '$birthday', avatar = '$avatar', `status` = '$status', `password` = '$password', updated_at = '$updated_at' 
        WHERE id = $id";
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
    
    //deleta user
    function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = $id";
        return mysqli_query($this->connect(),$sql);
    }

    // count total user
    function totalUser()
    {
        $sql = "SELECT COUNT(id) AS total_users FROM users";
        return mysqli_query($this->connect(),$sql);
    }

    function getOptionUser()
    {
        $sql = "SELECT id, `name` FROM users";
        return mysqli_query($this->connect(),$sql);
    }
}

?>