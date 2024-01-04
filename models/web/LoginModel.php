<?php
    include 'config/database.php';
   
    class LoginModel extends connectDB {

        function register($name,$email,$phone,$role,$birthday,$avatar,$password) {
            $checkUserExist = $this->checkUserExist($name);
           //kiểm tra tên người dùng đã tồn tại hay chưa
           if($checkUserExist->num_rows == 0) {
                $sql = "INSERT INTO users(name,email,phone,role,birthday,avatar,password) VALUES('$name','$email','$phone','$role','$birthday','$avatar','$password')";
                return mysqli_query($this->connect(),$sql);       
            }
            return false;
        }
        //lấy ra username
        function checkUserExist($name) {
            $sql = "SELECT * FROM users WHERE name = '$name'";
            return mysqli_query($this->connect(),$sql);
        }
        //đăng nhập
        function login($name,$password) {
            $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
            return mysqli_query($this->connect(),$sql);
        }

        function getUserID($name) {
            $sql = "SELECT id FROM users WHERE name = '$name'";
            return mysqli_query($this->connect(), $sql);
        }
    }
