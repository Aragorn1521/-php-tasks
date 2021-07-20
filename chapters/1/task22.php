<?php

/* Вывести все четные числа кратные пяти в интервале от 2 до 100 
 * включительно.
 */


$start = 2;
$end = 100;
$arr = range($start, $end);

foreach ($arr as $value){
    if($value % 2 == 0){
        $newArr[] = $value;
    }
}

foreach ($newArr as $value) {
   if($value % 5 == 0){
       $result[] = $value;
   }
}
print_r($result);

