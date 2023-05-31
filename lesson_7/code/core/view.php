<?php

class View {
    function render($path, $data ) {
        extract($data);
        $fullpath = __DIR__."/../app/template/" . $path; 
        if (file_exists($fullpath) ) {
            ob_start();
            include $fullpath;
            #$page = !$output?ob_get_clean():true;
            $page = ob_get_clean();
        } else {
            throw new Exception("File does't exist!", 1);
        }
        echo $page; 
    } 
}


