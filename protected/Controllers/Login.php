<?php

namespace App\Controllers;


use App\Controller;
use App\User;

class Login
    extends Controller
{

    public function actionLogin()
    {
        $this->view->display(__DIR__ . '/../../template/user/login.php');
    }

    public function actionAuth()
    {
        $user = User::authenticate($_POST['email'], $_POST['password']);
        if (false === $user) {
            header('Location: /');
            die;
        }

        $userSessionId = hash('sha256', microtime(true) . uniqid());
        setcookie(COOKIE_NAME, $userSessionId);
        saveUserSession($user, $userSessionId);
        header('Location: /');
    }

}