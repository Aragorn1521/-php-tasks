<?php

/*Ввести массив из 9 вещественных чисел. Создать новый массив из 
 * элементов исходного, которые по модулю больше 10. 
 * Вычислить среднее арифметическое элементов нового массива.
 */

$arr = [-11,12,13,7,-16,2,4,18,-32,10];
$arrayOfModules = [];
foreach ($arr as $value) {
    $value = abs($value);
    $arrayOfModules[] = $value;
}
foreach ($arrayOfModules as $value) {
    if($value >= 10){
        $arrayWithResult[] = $value;
    }

}    
$numberOfElements = count($arrayWithResult);
$sum = array_sum($arrayWithResult);
$result = $sum / $numberOfElements;
echo $result;