<?php

// var_dump($_GET);

$action =  empty($_GET['action'])? 'default':  $_GET['action'];

// var_dump($action);

// var_dump($_GET['status']);

// switch ($_GET['status']) {
//    case 1:
//       echo "Новая игра";
//       break;
//    case '1':
//       echo "Новая игра";
//       break;
//    case 2:
//       echo "Сохранить игру";
//       break;
//    case 3:
//       echo "Выход из  игры";
//       break;
//    }
// $obj = new StdClass();
// $obj->name =  'Hello';
// $output = "";
// function render(&$output, $str='!') {
//    $output = $output . $str;
// }
// function about($output) {
//    print("Страница о нас!");
// }
// // render($output,'Hello');
// // render($output, ' World');
// $action($output);
// print($output);



// if (empty($_GET['action'])) {
//    $action =  'default';

// } else {
//    $action = $_GET['action'];
// }




$x = 10;
$y = 20;
if (isset($y)){
    print("ddd");
}   else {
    print("Help");
}


// function render($x)  {
//       if is_null($x) return NULL
//      print("Что то ! ");

// }
// $call = render();
// var_dump($call == NULL);