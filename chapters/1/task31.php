<?php

/*Отсортировать по возрастанию заданный массив чисел, исключив 
 * отрицательные числа. Использовать функцию сортировки.
 */

$arr = [1,-1,2,-2,3,-4,8,-7];
$newArr = [];
foreach ($arr as $value) {
    if ($value > 0){
      $newArr[] = $value;
    }
}
sort($newArr);
print_r($newArr);