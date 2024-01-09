<?php
 include_once 'models/UserModel.php';
 include 'utils/helpers.php';
class UserController
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

        $action = isset($_GET['action']) ? $_GET['action'] : 'list';

        switch ($action) {
            case 'list':
               $this->getListUser();
                break;
            case 'create':
                $this->createUser();
                break;
            case 'edit':
                $this->editUser($_GET['id']);
                break;
            case 'delete':
                $this->deleteUser($_GET['id']);
                break;
            default:
                # code...
                break;
        }
    }

    private function getListUser() {
        $users = $this->model->getList(); // Lấy toàn bộ user từ database.
        include 'views/admin/users/list.view.php'; // views đã có giá trị users
    }

    private function createUser() {
        if (isset($_POST['create'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
            $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
            $birthday = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_STRING);
            $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
            $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $passwordAgain = filter_input(INPUT_POST, 'passwordAgain', FILTER_SANITIZE_STRING);
            $avatar = $_FILES['avatar']['name'];

            if (!empty($name) && !empty($email) && !empty($gender) && !empty($birthday) && !empty($role) && !empty($status) && !empty($password) && !empty($passwordAgain) && !empty($phone)) {
                $createUser = $this->model->register($name,$email,$avatar,$phone,$gender,$birthday,$role,$status,$password);
                if ($createUser) {
                    move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/uploads/users/'.$avatar);
                    $this->libs->redirectPage('admin.php?controller=users&action=list');
                }
            }
        }
        include 'views/admin/users/create.view.php';
    }

    private function editUser($id) {
        $userById = $this->model->getUser($id);
        $oldUser = $userById->fetch_assoc();
    
        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $status = $_POST['status'];
            $password = $_POST['password'];
            $updated_at = date('Y-m-d h:i:s');

            //Nếu không thay đổi avatar thi sẽ dùng avatar cũ
            if ($_FILES['avatar']['name'] == '') {
                $avatar = $oldUser['avatar'];
            } else {
                $avatar = $_FILES['avatar']['name'];
            }

            if($name != '' && $email != '' && $phone != '' && $role != '' && $gender != '' && $birthday != '' && $password != '' && $avatar !='' && $status != '') {
                move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets/uploads/users/'.$avatar);
                $checkAdd = $this->model->editUser($id,$name,$email,$phone,$role,$gender,$status,$birthday,$avatar,$password,$updated_at);
                if($checkAdd === TRUE) {
                    $this->libs->redirectPage('admin.php?controller=users&action=list');
                }					
            }
        }
    
        include 'views/admin/users/edit.view.php';
    }

    private function deleteUser($id) {
        $this->model->deleteUser($id);
        $this->libs->redirectPage('admin.php?controller=users&action=list');
    }
}

