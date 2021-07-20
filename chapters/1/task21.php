<?php

/* Даны натуральные числа от -500 до 500. Найти все трехзначные числа,
 * у которых четные сотни.
 */

/*
 * Может быть я не понял задания,но вроде бы селал то,что требовалось.Или здесь
 * нужно было,чтобы вывелось 201,202,203 и.т.д?
 */
$start = -500;
$end = 500;
$arr = range($start, $end);

foreach ($arr as $value){
    if($value % 100 == 0){
        $value = $value / 100;
        $newArr[] = $value;
    }
}

foreach ($newArr as $value) {
   if($value % 2 == 0 and $value != 0){
       $result[] = $value * 100;
   }
}
print_r($result);

