<?php

/* Ввести целое число N. Создать массив из N целых чисел. Определить
 * индекс наибольшего элемента массива
 */


$arr = [1,2,8,12,24,19,66,84,1,4,9,11];

$max =  max($arr);

$searchIndex = array_search($max, $arr);
echo $searchIndex;