<?php

// Task 1

$directory = "./testDirectory/";

//function catalog ($dir)
//{
//    if (is_dir($dir)) {
//        if ($dh = opendir($dir)) {
//            while (($file = readdir($dh)) == true) {
//                if (is_dir($file)) {
//                    var_dump(filetype($file));
//                    echo "<br>";
//                }
//
//            }
//        }
//    }
//}
//catalog($directory);

// Task 2

//include "template/index.html";

// Task 3

function getPathOfAlias($url) {
    if (isset($url)){
        var_dump("true");
    return (realpath($url));}
    else {
        var_dump("false");
        return false;
    }
}
getPathOfAlias($directory);

function import($directory) {

}
