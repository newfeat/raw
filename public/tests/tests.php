<?php

require __DIR__ . '/../../autoload.php';


$article = \App\Models\Article::findById(1);

$article->title = 'Новость';
$article->lead = 'Новость';
$article->desc = 'Новость';
$article->update();
var_dump($article->update());



$article = new \App\Models\Article();
$article->id = '';
$article->title = 'Новость';
$article->lead = 'Новость';
$article->desc = 'Новость';
$article->insert();
var_dump($article->insert());