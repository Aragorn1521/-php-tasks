<?php

/*В заданной строке найти месторасположение первого символа «*».
 * 
 */
$str = 'asa*332*1219*';

$arr = str_split($str);

$newArr = [];
foreach ($arr as $key=>$value) {
    if($value == '*')
    {
        $newArr[] =  $key;
    }
   
}

echo min($newArr);