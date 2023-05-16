<?php

// First task

$year = 2016;
if ((($year % 4 != 0) && ($year % 400 != 0)) || $year % 100 == 0) {
print ("$year год не является високосным");
} else {
    print ("$year год является високосным");
}

// Second task

switch ($_GET['action']) {
    case 1:
        print ("Выполняется команда 1");
        break;
    case 2:
        print ("Выполняется команда 2");
        break;
    case 3:
        print ("Выполняется команда 3");
        break;
    default:
        print ("Неверная команда");
}

// Third task

function getDaysToNewYear () {
    $currentYear = date("Y");
    $daysAfterNewYear = date("z");

    if (($currentYear % 4 != 0) && (($currentYear % 400 != 0)) || ($currentYear % 100 == 0)) {
        return 365 - $daysAfterNewYear;
    } else {
        return 366 - $daysAfterNewYear;
    }
}
print (getDaysToNewYear ());

// Fourth task

print ("Факториал:");
function factorial ($x) {
    print ("$x <br>");
    return $x === 0 ? 1 : $x * factorial($x - 1);
}
print factorial(7);

// Fifth task

function getPathOfAlias ($convertPath) {
    return realpath($convertPath);
}
print getPathOfAlias("
PhpstormProjects.ITMO_WebDev_PHP_Anton_Shevchenko.index.php");

## Переменное число параметров функции (устаревший способ)



function myecho()
{
    foreach (func_get_args() as $v) {
        print ("$v </br>");
    }
}

// Отображаем строки одну под другой
myecho("Меркурий", "Венера", "Земля", "Марс");

function silly()
{
    $i = mt_rand(); // записывает в $i случайное число
    echo "$i<br />"; // выводит его на экран
// Эта $i не имеет к глобальной $i никакого отношения!
}
for ($i = 0; $i != 10; $i++) silly();

$a = 5;
function test()
{
    global $a;
    return $a = 10;
}
print test();