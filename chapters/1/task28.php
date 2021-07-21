<?php

/*В заданном массиве двоичных чисел выполнить циклический сдвиг всех 
 * элементов влево на одну позицию. Определить сумму чисел 
 * до и после операции сдвига.
 */
$arr = ['01100','01101001','10101'];
$decimalArray = [];
foreach ($arr as $value) {
    $value = bindec($value);
    $decimalArray[] = $value;
}

$leftShiftArray = [];
foreach ($decimalArray as $value) {
    $value = $value - 1;
    $leftShiftArray[] = $value;
    
}
$sum1 = array_sum($decimalArray);
$sum2 = array_sum($leftShiftArray);
echo $sum1.'<br>'.$sum2;
