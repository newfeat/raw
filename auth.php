<?php

require_once __DIR__ . '/functions.php';

$user = authenticate($_POST['email'], $_POST['password']);
if (false === $user) {
    header('Location: /');
    die;
}

$userSessionId = hash('sha256', microtime(true) . uniqid());
setcookie(COOKIE_NAME, $userSessionId);
saveUserSession($user, $userSessionId);
header('Location: /');
