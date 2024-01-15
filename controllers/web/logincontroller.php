<?php
include_once 'models/web/LoginModel.php';
include 'utils/helpers.php';
class logincontroller{
    public function handleRequest(){
        require_once './views/web/auths/login.view.php';
    }
}