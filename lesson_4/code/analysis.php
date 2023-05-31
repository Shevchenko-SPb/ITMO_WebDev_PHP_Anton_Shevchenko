<?php
# Проверка пользователя
$file = file('./pass.csv');
$login_ = 'admin';
echo $login[0];
function checkUser($login) {
  global $file;
  if (!$login) { return NULL; } 
    foreach( $file as $value ) {
      $str = explode(';', $value);
      if ( $login == $str[1]) {
          return $str;      
      }  
    }
  return NULL;
}

var_dump(checkUser($login_));
$result = checkUser($login_);


#Цикл while
$counter = 10;
while($counter) {
    if ($counter >  10) { break; }
    $counter--; 
}

# Объявление массива
$arrayName = array( 1, 'color' => 'Red', 'age'=> 100);
# Добавление элемента в массив
$arrayName[] = 12;

# Итерируем массив 
foreach($arrayName as $key => $value){
    echo  $key  . "\n ";
    echo $value . " ";
}

#Меняем значения в массиве
$i = 0;
foreach($arrayName as $key => &$value){
    // $arrayName[] = 12;
    $value  = $i;    
    $i++;
}

#var_dump($arrayName);

# extract - экспорт переменных из массива в текущую таблицу символов
# https://www.php.net/manual/ru/function.extract
# $variables = array("color" => "red")
# extract($variables);
# echo $color 

# Проверка на сущ. файла 
# file_exists($fullpath) 

# include - включает и выполняет импортируемый файл
# https://www.php.net/manual/ru/function.include.php

# Буферизация вывода ob-start() ob-get-clean()
# https://www.php.net/manual/ru/function.ob-get-clean.php

#Шаблонизация файла.

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