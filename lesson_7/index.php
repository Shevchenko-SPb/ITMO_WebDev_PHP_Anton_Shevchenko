<?php 
// define("DIRECTORY_SEPARATOR", '/');
//var_dump(DIRECTORY_SEPARATOR);
// require ("./lib1/test1.php");
define('ROOT', dirname(__FILE__));
var_dump(ROOT); 
exit(0);

spl_autoload_register(function ($class_name) {
   
        $file = __DIR__. "/".str_replace('\\', DIRECTORY_SEPARATOR, $class_name).'.php';
        if (file_exists($file)){
            require $file;
            return true; 
        }
});

use lib2 as lt2;
use lib1 as lt1;

$obj = new lt2\app();
$obj = new lt1\app();



