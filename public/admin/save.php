<?php
require __DIR__ . '/../../autoload.php';


if(!empty($_POST['id'])){
    $article = \App\Models\Article::findById($_POST['id']);
} else {
    $article = new \App\Models\Article();
}
$article->title = $_POST['title'];
$article->lead = $_POST['lead'];
$article->description = $_POST['description'];
$article->save();

header('Location: /admin/index.php');