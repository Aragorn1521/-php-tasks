<?php

/*
 * В заданной строке поменять местами первое и последнее слово строки.
 * Разделителями слов считаются пробелы.
 */

$str = 'Привет . меня зовут Артём';
$arr = explode(' ', $str);

$finiteNumber = count($arr);
$finiteNumber = $finiteNumber - 1;


$lastElement = $arr[$finiteNumber];

$temp = $arr[0];
$arr[0] = $lastElement;
$arr[$finiteNumber] = $temp;

$str2 = implode(' ',$arr);
echo $str2;
