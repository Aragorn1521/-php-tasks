<?php
//Задача 5
/*Даны значения трех сторон треугольника a, b и c
 * и определить, является ли он равнобедренным. Ответ вывести в виде сообщения..
 */

$a = 1;
$b = 4;
$c = 2;

if($a == $b){
    echo 'Треугольник равнобедренный';
}
elseif($a == $c){
    echo 'Треугольник равнобедренный';
}
elseif($b == $c){
    echo 'Треугольник равнобедренный';
}
 else {
     echo 'Треугольник НЕ равнобедренный';
}
