<?php

// Task 1

$directory = "./testDirectory/";

function catalog ($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) == true) {
                if (is_dir($file)) {
                    var_dump(filetype($file));
                    echo "<br>";
                }
            }
        }
    }
}
catalog($directory);



//    if ($path = opendir($path)) {
//        while (($file = readdir($path)) !== false) {
//            echo "файл: $file, тип: " . filetype($path . $file) . "\n";
//            var_dump($path);
//            if (is_dir($file)) {
//                opendir($path . $file);
//                var_dump($file);
//            }
//        }
//        closedir($path);
//    }





// Task 2


// Task 3

