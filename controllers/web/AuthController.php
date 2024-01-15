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
        //$bookings = $this->model->getList();
        //Check user da login hay chua, neu roi thi se chuyen trang home, chua thi toi trang login

        if (isset($_SESSION['login']) && $_SESSION['login']['role'] == '2') {
            $this->libs->redirectPage('index.php?controller=home&action=home');
        }

        if (isset($_POST['login'])) {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            $checkLogin = $this->model->login($email, $password);

            if($checkLogin->num_rows) {
                $user = $checkLogin->fetch_assoc();
                $login['name']     = $user['name'];
                $login['role']     = $user['role'];
                $login['id']       = $user['id'];
           
                $_SESSION['login'] = $login;
                if(isset($_SESSION['login-error'])) {
                   unset($_SESSION['login-error']);
                }


                $this->libs->redirectPage('index.php?controller=home&action=home');
            } else {
                $_SESSION['login-error'] = 'Login unsuccessful';
                $this->libs->redirectPage('index.php?controller=auth&action=login');
           }

        }

        include 'views/web/auths/login.view.php';
    }

    private function logout()
    {
        unset($_SESSION['login']);
        $this->libs->redirectPage('index.php?controller=auth&action=login');
    }
}
