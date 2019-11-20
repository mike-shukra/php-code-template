<?php

namespace Controllers;

class Login extends \App\Controller
{

    public function index()
    {


        return $this->render('Login');
    }
    
    public function run(){
        if ($_POST['login'] != null) $login = $_POST['login'];
        if ($_POST['password'] != null) $password = $_POST['password'];

        $this->model::checkUsers($login, $password);

        return $this->render('Login');
    }

    public function out(){
        $this->model::logout();

        return $this->render('Login');
    }
}
