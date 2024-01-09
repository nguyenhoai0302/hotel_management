<?php
include_once 'config/database.php';

class LoginModel extends ConnectDB 
{
    //đăng nhập
    function login($name,$password) {
        $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
        return mysqli_query($this->connect(),$sql);
    }
}