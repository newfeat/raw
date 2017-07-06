<?php

require __DIR__ . '/../../autoload.php';

$article = \App\Models\Article::findById((int)$_GET['id']);
$article->delete();

header('Location: /admin');
