<?php
    include 'models/UserModel.php';
    include 'utils/helpers.php';

class AuthController
{
    private $model;
    private $libs;
    public function __construct()
    {
        $this->model = new UserModel();
        $this->libs = new LibCommon();
    }

    function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';
        switch ($action) {
            case 'login':
                $this->loginUser($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }

    private function loginUser($id) {
        if(isset($_POST['login'])) {
            $name      = $_POST['name'];
            $password      = $_POST['password'];
            $checkLogin = $this->model->login($name,$password);
            if($checkLogin->num_rows) {
                $role = $checkLogin->fetch_assoc();
                $login['name']    = $role['name'];
                $login['role']     = $role['role'];
                $login['avatar']   = $role['avatar'];
                $login['id']       = $role['id'];
                $_SESSION['login'] = $login;
            if(isset($_SESSION['login-error'])) {
                unset($_SESSION['login-error']);
            }
            if(isset($_SESSION['comment-error'])) {
                unset($_SESSION['comment-error']);
            }
                $this->libs->redirectPage('index.php?controller=front&action=home');
            } else {
                $_SESSION['login-error'] = 'Đăng nhập không thành công';
                $$libs->redirectPage('index.php?controller=users&action=login');
            }
        }
      include 'views/paritial/login.view.php';
    }
}