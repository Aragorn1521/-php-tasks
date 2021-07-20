<?php

/* Написать программу, которая по коду города и 
 * длительности переговоров вычисляет их стоимость и результат 
 * выводит на экран: Одесса-код 048, 15грн; Киев-код 044, 18грн; 
 * Харьков-код 046, 13грн; Винница-код 045,11грн.
 */

$code = '044';
$time = 25;

function callСost ($code,$time){
switch ($code) {
    case '048':
        $price = 15;
        $city = 'Одесса';
        break;
    case '044':
        $price = 18;
        $city = 'Киев';
        break;
    case '046':
        $price = 13;
        $city = 'Харьков';
        break;
    case '045':
        $price = 11;
        $city = 'Винница';
        break;
    default:
        break;
}
$callСost = $price * $time;
echo $callСost."<br>".$city;
}
callСost($code, $time);


