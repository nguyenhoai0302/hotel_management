<?php
function login($frontModel, $libs)
{
    if (isset($_POST['login'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $checkLogin = $frontModel->login($name, $password);

        if ($checkLogin->num_rows) {
            $role = $checkLogin->fetch_assoc();
            $login['name'] = $role['name'];
            $login['role'] = $role['role'];
            $login['avatar'] = $role['avatar'];
            $login['id'] = $role['id'];
            $_SESSION['login'] = $login;

            if (isset($_SESSION['login-error'])) {
                unset($_SESSION['login-error']);
            }
            if (isset($_SESSION['comment-error'])) {
                unset($_SESSION['comment-error']);
            }
            $libs->redirectPage('index.php?controller=front&action=home');
        } else {
            $_SESSION['login-error'] = 'Đăng nhập không thành công';
            $libs->redirectPage('index.php?controller=auths&action=login');
        }
    }

    // Include the login view
    include './views/web/auths/login.view.php';
}

function register($frontModel, $libs)
{
    if (isset($_POST['register'])) {
        // Handle user registration
        handleUserRegistration($frontModel, $libs);
    }

    // Include the registration view
    include './views/web/auths/register.view.php';
}

function logout($libs)
{
    // Handle user logout
    session_destroy();
    $libs->redirectPage('index.php?controller=rooms&action=home');
}

function forgotPassword()
{
    // Implementation for handling forgotten passwords
    // ...
}

function handleUserRegistration($frontModel, $libs)
{
    // Extract POST data for registration
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $passwordAgain = $_POST['passwordAgain'];

    // Validate input and perform registration
    if ($name != '' && $email != '' && $phone != '' && $role != '' && $birthday != '' && $password != '' && $password == $passwordAgain) {
        $avatar = $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . $avatar);
        $checkRegister = $frontModel->register($name, $email, $phone, $role, $birthday, $avatar, $password);

        if ($checkRegister === true) {
            if (isset($_SESSION['reg-error'])) {
                unset($_SESSION['reg-error']);
            }
            $libs->redirectPage('index.php?controller=rooms&action=home');
        } else {
            $_SESSION['reg-error'] = 'Đăng ký không thành công!';
        }
    }
}

?>
