<?php

require __DIR__ . '/../autoload.php';


$news = \App\Models\Article::findLatest(3);
include __DIR__ . '/../templates/news.php';