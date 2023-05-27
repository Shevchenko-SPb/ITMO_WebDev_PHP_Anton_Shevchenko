<?php


spl_autoload_register(function ($class_name) {
    $file = __DIR__."\\".str_replace('\\', DIRECTORY_SEPARATOR, $class_name).'.php';
        if (file_exists($file)){
            require $file;
            return true;
        }
});

use lib1 as lt1;
use lib2 as lt2;

$obj = new lt1\app();
$obj = new lt2\app();

var_dump(__NAMESPACE__);