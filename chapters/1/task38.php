<?php

/* Для чисел от 1 до 1000, найти сотни в которых есть внутренние 
 * повторение ( например 122, 133, 144, 677 и т.д.)
 */
$start = 1;
$end = 1000;
$array = range($start, $end);
$newArr = [];


foreach ($array as $value) {
    if (strlen($value) == 3) {
        $value = (string) $value;
        if ($value[1] == $value[2]) {
            $newArr[] = $value;
        }
    }
}

print_r($newArr);
