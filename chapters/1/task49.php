<?php

/*Ввести в Memo вещественные числа. Создать массив из чисел Memo,которые 
 * попадают в интервал [2,13]. Определить, есть ли в массиве числа, большие 10.
 */
$interval = range(2, 13);
$arr = [1,2,9,9,8,13,4,8,6,4];

foreach ($arr as $value) {
    foreach ($interval as $value1) {
        if ($value == $value1)
            $newArr[] = $value;
        
    }
    
}
print_r($newArr);
foreach ($newArr as $value) {
    if($value > 10){
        echo 'В массиве есть число больше 10';
        break;
    }
  
}

