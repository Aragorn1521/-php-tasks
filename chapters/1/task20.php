<?php

/* 
 * Найти произведение квадратов чётных чисел в интервале, заданном
 * значениями переменных m и n.
 */
$start = 18;
$end = 24;
$arr = range($start, $end);

$pr = 1;
foreach ($arr as $value){
    if($value % 2 == 0 ){
        $value = $value ** 2;
        $pr *= $value;
    }
}
echo $pr;
