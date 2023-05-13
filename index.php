<?php
//var_dump($_GET);
//
//$action =  empty($_GET['action'])? 'default': $_GET['action'];
//
//var_dump($action);
//
//if (empty($_GET["action"])) {
//    $action = "default";
//} else {
//    $action = $_GET["action"];
//}
//var_dump($action);

//var_dump($_GET["status"]);
//
//switch ($_GET["status"]) {
//    case 1:
//        echo "new game";
//        break;
//    case "1":
//        echo "new game2";
//        break;
//    case 2:
//        echo "save game";
//        break;
//    case 3:
//        echo "close game";
//        break;
//}

//$obj = new StdClass();
//$obj->name = 'Hello';
//
//$output = "";
//$action = "default";
//function render($output, $str='!')
//{
//    $output = $output . $str;
//}
//
//render($obj);
//print($obj->name);

$call = "render";
function render () {
    print("Чтото");
}
render();
$call();
"render"();

