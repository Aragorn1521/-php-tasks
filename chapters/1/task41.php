<?php

/*Ввести массив, состоящий из 12 элементов действительного типа. 
 * Расположить элементы в порядке убывания. Определить количество 
 * происшедших при этом перестановок.
 */

$arr = [33,14,11,110,18,12,7,77,19,22,4];
$countArr = count($arr);

$decreasingArray = $arr;
rsort($decreasingArray);

$discrepanciesInTheArray = array_diff_assoc($arr, $decreasingArray);

$result = count($discrepanciesInTheArray);
echo $result;
