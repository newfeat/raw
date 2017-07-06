<?php
require __DIR__ . '/../../autoload.php';

$news = \App\Models\Article::findAll();

include __DIR__ . '/admintemplates/index.php';
