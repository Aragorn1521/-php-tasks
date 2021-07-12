<?php
//Задача 1
/*Ввести с клавиатуры два числа. Определить, что больше, сумма квадратов
* или квадрат суммы этих чисел. Ответ вывести в виде сообщения.
* a2 + b2 = (a + b)2 - 2*(a*b) - сумма квадратов
* (a + b)2 = a2 + 2ab + b2 - квадрат суммы
* как возвести в квадрат?
* 1) $a ** $b;
* 2)pow(int|float $base, int|float $exp): int|float;
*/

$a = 10;
$b = -10;

$SumOfSquares = ($a ** 2)+($b ** 2);
$TheSquareOfTheSum = ($a + $b) ** 2;

if($SumOfSquares > $TheSquareOfTheSum){
    echo $SumOfSquares . '<br> Сумма квадратов больше,чем квадрат суммы';
}
 else {
    echo $TheSquareOfTheSum. '<br> Сумма квадратов меньше,чем квадрат суммы';
}