<?php

/* 
 * Дано натуральное число n. Получить все простые делители этого числа.
 */
$number = 14654;
$arr = [];
for($i = 1; $i <= $number; $i++){
    if($number % $i == 0 ){
        $arr[] = $i;
    }
}
print_r($arr);