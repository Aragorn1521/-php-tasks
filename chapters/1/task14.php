<?php

/*
 * Дано натуральное число. Определить, является ли оно четным или 
 * оканчивается цифрой 7.
 */

/*
 * Понимаю,что решение так себе.Давай разберем как сделать лечше?
 */

$number = 128;

$arr = str_split($number);
$lastNumber = count($arr);
$lastNumber = $lastNumber - 1;

if($number % 2 == 0){
    echo 'Число четное';
    echo '<br>';
    
}

    if($arr[$lastNumber] == 7){
        echo 'Число заканчивается на 7';
    }
 else {
        echo 'Число НЕ заканчивается на 7';
}
    

