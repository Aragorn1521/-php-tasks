<?php

/*Дано натуральное число n (n<9999) и число m. Найти сумму m-последних 
 * цифр числа n.
 */
$n = 9997;
$m = 2;
$arr = str_split($n);
$count = count($arr);
$res = ($count - $m) - 1;




foreach ($arr as $key => $value) {
    if($key > $res){
        $newArr[] = $value;
    }
}
$result = array_sum($newArr);
echo $result;