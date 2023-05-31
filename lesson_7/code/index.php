<?php

require './core/autoloader.php';

$controller = $_GET['r'] ?? 'main';
$action = $_GET['action'] ?? 'index';
$controller = ucfirst($controller);
$ctrl  = new $controller();
$ctrl -> $action();



//$obj = new Page();
//var_dump($obj->index());

#https://www.php.net/manual/ru/language.oop5.autoload.php
#https://rmcreative.ru/blog/post/mvc-front-controller-controller-i-router

#Соглашение по именованию файлов и классов. 

