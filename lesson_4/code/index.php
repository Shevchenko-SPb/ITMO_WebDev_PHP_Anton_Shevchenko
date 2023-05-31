<?php
$size = "large";
$var_array = array("title" => "Моя домашняя страница",
                   "content"  => "medium",
                   "footer" => "@2003");

extract($var_array);

$fullpath = "./template/layout.html"; 
if (file_exists($fullpath) ) {
      ob_start();
      include $fullpath;
      #$page = !$output?ob_get_clean():true;
      $page = ob_get_clean();
} else {
      throw new Exception("File does't exist!", 1);
}
echo $page; 


