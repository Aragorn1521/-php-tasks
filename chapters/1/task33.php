<?php

/* Ввести в Memo целые числа. Создать массив из чисел Memo, которые не
 * делятся на 5. Определить минимальный элемент массива.
 */

$arr = [25,26,29,30,35,31];
$newArr = [];
foreach ($arr as $value) {
    if ($value % 5 != 0){
        $newArr[] = $value;
    }
}
$min = min($newArr);
echo $min;



