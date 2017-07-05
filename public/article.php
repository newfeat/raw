<?php

require __DIR__ . '/../autoload.php';

if (empty($_GET['id'])) {
    echo 'Ошибка';
}

$id = $_GET['id'];
$article = \App\Models\Article::findById($id);

include __DIR__ . '/../templates/article.php';