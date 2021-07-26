<?php

/*Ввести массив из 11 вещественных чисел. Создать новый массив из элементов 
 * исходного, не превышающих среднее арифметическое массива. 
 * Определить наименьший положительный элемент нового массива.
 */

$arr = range(-1, 15);
$numberOfElements = count($arr);
$sum = array_sum($arr);
$averageValue = $sum / $numberOfElements;


foreach ($arr as $value) {
    if($value < $averageValue){
        $arrayWithResult[] = $value;
    }
}

foreach ($arrayWithResult as $value){
    if($value >= 0 ){
        $newArr[] = $value;
    }
}
//print_r($newArr);
$result = min($newArr);
echo $result;

