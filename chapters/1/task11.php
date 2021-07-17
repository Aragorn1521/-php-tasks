<?php

/*
 * В заданной строке вместо каждого пробела поставить символ «».
 */
/*
 * Взял готовое решение. Хочу раобраться построчно как оно работает.
 */

$str = 'Привет Меня АА зАвут А а А а';
$arr = mb_str_split($str,1);
$find = ' ';
$replace = '« »';



 function recursive_array_replace ($find, $replace, $array) {
    if (!is_array($array)) {
        return str_replace($find, $replace, $array);
    }

    $newArray = [];
    foreach ($array as $key => $value) {
        $newArray[$key] = recursive_array_replace($find, $replace, $value);
    }
    return $newArray;
 }
 
 
 $result = recursive_array_replace($find, $replace, $arr);

 $result = implode($result);
 echo $result;

