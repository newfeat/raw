<?php

require __DIR__ . '/../../autoload.php';


try{
    $article = new \App\Models\Article();
    $article->fill(['title' => '!', 'price' => -39]);

} catch (\App\MultiException $e){
    var_dump($e);
}