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

