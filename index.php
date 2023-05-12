<?php
$hello = "Hello world!";
$float = 4.44;
$integer = 33;
$flag = false;
$null = null;
$string = "";
$stringWithNumber = "0";
$array = [];

$data = array($hello,$float,$integer,$flag,$null,$string,$stringWithNumber,$array);

foreach ($data as $value) {
    var_dump(boolval($value));
}
?>