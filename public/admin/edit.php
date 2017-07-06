<?php
require __DIR__ . '/../../autoload.php';

$article = \App\Models\Article::findById((int)$_GET['id']);

include __DIR__ . '/admintemplates/edit.php';