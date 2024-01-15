<?php
include_once './config/database.php';

class LoginModel extends ConnectDB
{
    public function login()
    {
        // $dbConnection = new ConnectDB();
        // $conn = $dbConnection->connect();

        if (isset($_POST['login'])) {
            $name = trim($_POST['name']);
            $password = trim($_POST['password']);

            if (empty($name) || empty($password)) {
                echo '<script language="javascript">alert("Username and password are required!"); window.location="index.php?controller=login";</script>';
                die();
            }

            $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
            $result = mysqli_query($this->connect(), $sql);
           

            if (mysqli_num_rows($result) > 0) {
                echo '<script language="javascript">alert("Login successful!"); window.location="index.php";</script>';
                exit();
            } else {
                echo '<script language="javascript">alert("Invalid username or password!"); window.location="index.php?controller=login";</script>';
                die();
            }
        }
    }
            
}
$loginModel = new LoginModel();
$loginModel->login();
?>