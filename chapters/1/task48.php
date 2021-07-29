<?php

/*Из заданной символьной строки выбрать те символы, которые встречаются в ней 
 * только один раз, в том порядке, в котором они встречаются в тексте.
 */

$string = "Hello World";

$arr = str_split($string);
$result = array_unique($arr);

$result = implode($result);
echo $result;
