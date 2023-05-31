<?php 
namespace core\code\autoloader;
define ("CTRL" , __DIR__.'/../app/controller/');
define ("MDL" , __DIR__.'/../app/model/');
define ("VW" , __DIR__.'/../app/view/');


class Autoloader 
{
    public static function register()
    {
        spl_autoload_register(function ($class_name) {
            foreach ( array(CTRL, MDL, VW) as $value ) {
                $file = $value . strtolower($class_name) . '.php';
                if (file_exists($file)){
                    require $file;
                    return true; 
                }
     
            }
        
        });
    }
}
Autoloader::register();


var_dump(__NAMESPACE__);
$obj =  core\code\autoloader\Autoloader();