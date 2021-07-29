<?php

/*Найти все числа кратные семи, и сумма цифр которых также кратна семи.
 * 
 */

$arr = range(1, 999999);

foreach ($arr as $value) {
    if($value % 7 == 0)
    {
        $value = str_split($value);
        $newArr[] = $value;
    }
}

$result = [];
foreach ($newArr as $value) {
    if(array_sum($value) % 7 == 0)
    {
        $value = implode($value);
        $result[] = $value;
    }
    
}
//print_r($newArr);
//echo '<br>';
//echo '<br>';
print_r($result);