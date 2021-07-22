<?php

/* В заданном массиве двоичных чисел определить количество чисел,
 * стоящих между максимальным и минимальным элементами. 
 * Вывести сообщение, если таких чисел нет.
 */


$arr = ['1','10','110','0','100','101','11'];

$newArr = [];
foreach ($arr as $value){

    $value = bindec($value);
    $newArr[] = $value;
}
print_r($newArr);

$max = max($newArr);
$min = min($newArr);


foreach ($newArr as $key => $value) {
    
if($value == $min){
    $NewMin = $key;
}
}
foreach ($newArr as $key => $value) {
    
if($value == $max){
    $NewMax = $key;

}
}

$result = ($NewMax - $NewMin) - 1;
if($result <= 0){
    $result = 'Таких чисел нет';
}
echo $result;
