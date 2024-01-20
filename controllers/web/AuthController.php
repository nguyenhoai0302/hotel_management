<?php
session_start();
include_once 'models/UserModel.php';
include_once 'utils/helpers.php';

class AuthController
{
    private $model;
    private $libs;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->libs = new LibCommon();
    }
    function handleRequest()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'login';

        switch ($action) {
            case 'login':
                $this->getLogin();
                break;
            case 'register':
                $this->getRegister();
                break;
            case 'logout':
                $this->logout();
                break;
            default:
                # code...
                break;
        }
    }


    private function getLogin()
    {
        //Check user da login hay chua, neu roi thi se chuyen trang home, chua thi toi trang login
        if (isset($_SESSION['login']) && $_SESSION['login']['role'] == '2') {
            $this->libs->redirectPage('index.php?controller=index');
        }

        if (isset($_POST['login'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            $checkLogin = $this->model->login($email, $password);

            if ($checkLogin->num_rows) {
                $user = $checkLogin->fetch_assoc();
                $login['name']     = $user['name'];
                $login['role']     = $user['role'];
                $login['id']       = $user['id'];

                $_SESSION['login'] = $login;
                if (isset($_SESSION['login-error'])) {
                    unset($_SESSION['login-error']);
                }
                $this->libs->redirectPage('index.php');
            } else {
                $_SESSION['login-error'] = 'Login unsuccessful';
                $this->libs->redirectPage('index.php?controller=auth&action=login');
            }
        }

        include 'views/web/auths/login.view.php';
    }

    private function getRegister()
    {

        if(isset($_POST['register'])) {

            $name          = $_POST['name'];
            $email         = $_POST['email'];
            $phone         = $_POST['phone'];
            $role          = $_POST['role'];
            $gender        = $_POST['gender'];
            $status        = $_POST['status'];
            $birthday      = $_POST['birthday'];
            // $avatar        = $_POST['avatar'];
            $password      = $_POST['password'];
            $passwordAgain = $_POST['passwordAgain'];
            $avatar = $_FILES['avatar']['name'];
            
            if( !empty($name) 
                && !empty($email)  
                && !empty($phone) 
                && !empty($gender) 
                && !empty($birthday) 
                && !empty($role) 
                && !empty($status) 
                && !empty($password)
                &&  $password == $passwordAgain
            ) {
                // echo "<script>console.log('Debug Objects: " . "haha" . "' );</script>";  
                // $avatar = $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/uploads/users/'.$avatar);
                $checkRegister = $this->model->register($name,$email,$avatar,$phone,$gender,$birthday,$role,$status,$password);
                if($checkRegister === TRUE) {
                    if(isset($_SESSION['reg-error'])) {
                        unset($_SESSION['reg-error']);
                    }
                    $this->libs->redirectPage('index.php?controller=auth&action=login');
                } else {
                    $_SESSION['reg-error'] = 'Đăng ký không thành công!';
                    // $this->libs->redirectPage('index.php?controller=auth&action=register');
                }					
            }
        }
        include 'views/web/auths/register.view.php';
    }

    private function logout()
    {
        unset($_SESSION['login']);
        $this->libs->redirectPage('index.php?controller=auth&action=login');
    }
}
