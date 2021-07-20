<?php


/* Дан массив символов. Преобразовать ее, удалив каждый символ * и
 * повторив каждый символ, отличный от *.
 */

/*Возможно я не правильно понял задание и тогда нужно было повторить каждый символ 
 * рядом с таким же символом (1,1,2,2...)
 */

$arr = ['1','2','*','f','4','s','aq','12','*','2'];

function Check($arr){
    $newArr = [];
    foreach ($arr as $value){
        if ($value === '*'){
            unset($value);
        } else {
            $newArr[] = $value;
            $newArr[] = $value;
        }
    }

//$result = array_merge($newArr,$newArr);
var_dump($newArr);
}
Check($arr);
