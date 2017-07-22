<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;
use App\Models\UserSession;

class Users
    extends Controller
{
    public function actionTest()
    {
        $this->view->display(__DIR__ . '/../../templates/user/test.php');
    }

    public function actionSignIn()
    {
        $this->view->display(__DIR__ . '/../../templates/user/authentication.php');
    }

    public function actionSignUp()
    {
        $this->view->display(__DIR__ . '/../../templates/user/registration.php');
    }

    public function actionLogin()
    {
        $user = User::authenticate($_POST['email'], $_POST['password']);
        if (false === $user) {
            header('Location: /');
            die;
        }

        $userSessionId = hash('sha256', microtime(true) . uniqid());
        setcookie('MYSESSID', $userSessionId);
        UserSession::saveUserSession($user, $userSessionId);
        User::getCurrentUser();
        header('Location: /Admin');
    }

    public function actionRegister()
    {

    }

}