<?php
$filesURL = file("URL.cvs");
$url = $_POST["userURL"];

checkURL($filesURL, $url);

function checkURL ($massive, $url) {
    foreach ($massive as $value) {
        if ($value == $url  . PHP_EOL) {
            exit("URL был записан ранее!");
        }
    }
    writeURL ($url);
}
function writeURL ($url) {
    $fp = fopen('URL.cvs', 'a+');
    file_put_contents("URL.cvs", $url . PHP_EOL, FILE_APPEND);
    fclose($fp);
}
