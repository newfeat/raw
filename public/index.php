<?php

include __DIR__ . '/../autoload.php';


$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

if (!empty($parts[1])) {
    $controllerName = $parts[1];
} else {
    $controllerName = 'News';
}

$controllerClass = '\\App\\Controllers\\' . $controllerName;
$actionName = $parts[2] ?: 'Default';

try{
    $controller = new $controllerClass;
    $controller->action($actionName);

} catch (\App\Exceptions\DbException $e){
    $controller = new \App\Controllers\Errors();
    $controller->action('Db500');
} catch (\App\Exceptions\ArticleNotFoundException $e){
    $controller = new \App\Controllers\Errors();
    $controller->action('Article404');
} catch (\App\Exceptions\CategoryNotFoundException $e){
    $controller = new \App\Controllers\Errors();
    $controller->action('Category404');
}
