<?php

function __autoload($class)
{
    require __DIR__ . '/protected/' .
        str_replace('\\', '/', substr($class, 4)) .
        '.php';
}