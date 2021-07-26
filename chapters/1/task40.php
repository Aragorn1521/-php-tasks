<?php

/*Ввести массив, состоящий из 9 элементов (девять двузначных чисел)
 * целого типа. Получить новый массив, состоящий из сумм цифр элементов 
 * исходного массива.
 */

$start = 25;
$end = 34;
$arr = range($start, $end);
$newArr = [];
foreach ($arr as $value) {
    $value = (string)$value;
    $value = str_split($value);
    $newArr[] = $value;
    
}
$sumArr = [];
foreach ($newArr as $value) {
    if(is_array($value)){
        $sum = array_sum($value);
        $sumArr[] = $sum;
    }
    
}
print_r($sumArr);