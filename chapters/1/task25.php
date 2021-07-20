<?php

/* Ввести в Memo вещественные числа. Создать из них массив. Определить
 * среднее арифметическое элементов массива.
 */

$arr = range(1, 2);

$count = count($arr);
$sum = array_sum($arr);

$average = $sum / $count;
echo $average;
