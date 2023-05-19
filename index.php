<?php

// Task 1

$kilo = 1;
$funt = 1;
$i = 1;

for ($kilo = 1; $kilo <= 10; $kilo++) {
    $funt = $kilo * 0.453;
    echo "$kilo киллограмм равно - ";
    echo "$funt фунтов <br>";
}
for ($funt = 1; $funt <= 10; $funt++) {
    $kilo = $funt / 0.453;
    echo "$funt фунтов равно - ";
    echo "$kilo киллограммов <br>";
}

// Task 2

$fairy = 20;
$plates = 10;
echo "у нас тарелок $plates штук и фейри $fairy литров <br>";
while ($plates > 0 && $fairy > 0) {
    $plates -= 1;
        $fairy -= 0.5;
        echo "Тарелок осталось $plates , а ";
        echo "фейри осталось $fairy <br>";

}
echo "итого осталось $plates тарелок и $fairy литров фейри =)";

// Task 3

