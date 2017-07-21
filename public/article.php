<?php

require __DIR__ . '/../autoload.php';

if (empty($_GET['id'])) {
    echo 'Ошибка';
}

$id = $_GET['id'];

$view = new \App\View();
$view->article = \App\Models\Article::findById($id);
$view->display(__DIR__ . '/../templates/article.php');