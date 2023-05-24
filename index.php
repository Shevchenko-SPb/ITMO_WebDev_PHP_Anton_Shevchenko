<?php


var_dump($_GET['controller']);
var_dump($_GET['action']);
//exit(0);
$controller = $_GET['controller'];
$controller_class = './controller' . ucfirst($controller) . '.php';
$action = $_GET['action'];

require_once $controller_class;


$obj = new $controller('a', 'b');
$obj->$action();

//$obj = new Page(True, "Это подвал");
// $obj1 = new Page('Это заголовок 1' , "Это подвал 1");
// //$obj2 = new Page();
// echo $obj->header();
//Page::footer();
