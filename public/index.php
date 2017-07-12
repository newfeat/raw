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


$controller = new $controllerClass;
$controller->action($actionName);
