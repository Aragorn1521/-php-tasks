<?php

/*
 * В заданной строке посчитать количество русских букв «А».
 */
/*
 * Возможно в задание от меня ждали какой-то другой реализации.Хз-если что,
 * объясни как его нужно было выполнять
 */

$str = 'Привет Меня АА зАвут А а А а';
$arr = mb_str_split($str,1);

$counter = 0;
/*for($i = 0;$i < count($arr); $i++)
{
   if($arr[$i] === 'А'){
       $counter++;
   }
   
}*/
foreach ($arr as $item) {
    if($item === 'А'){
        $counter++;
    }
}
echo $counter;
