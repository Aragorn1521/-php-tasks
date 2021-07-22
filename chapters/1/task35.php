<?php

/* Получить из заданной строки две строки, состоящие из символов
 * первой строки, имеющих соответственно четные и нечетные индексы.
 */

$str = 'asadasdada';
$array = str_split($str);
$even = [];
$notEven = [];
foreach ($array as $key => $value) {
    if($key % 2 == 0){
       $even[] =  $value;
    }
 else {
    $notEven[] = $value;    
    }
    
}

echo implode($notEven);
echo '<br>';
echo implode($even);

