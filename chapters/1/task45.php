<?php

/*Введите массив символов из 12 элементов. Вывести слова с заданным 
 * количеством символов.
 */

$str = 'Эта строка преобразуется в массив, который состоит из 12 символов. '
        . 'Разделителями будут пробелы';
$arr = explode(' ',$str);
$result = [];
foreach ($arr as $value) {
    $value = (string)$value;
    if(mb_strlen($value) === 3){
        $result[] = $value;
    }
}
print_r($result);