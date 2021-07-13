<?php
//Задача 3
/*Ввести с клавиатуры значения трех сторон треугольника a, b и c и определить,
 *является ли он прямоугольным. Ответ вывести в виде сообщения.
 *
 * Если выполняется теорема Пифагора:
 * с²=a²+b² , где с - наибольшая сторона, а и b две других,
 * – треугольник прямоугольный.
 */


$a = 3;
$b = 5;
$c = 4;

//startTask
$bb = $b*$b;
$aa = $a*$a;
$cc = $c*$c;

$arr = [$aa, $bb, $cc];
//вроде эта сортировка)
$sortArr = sort($arr);
checkParams($sortArr[0], $sortArr[1], $sortArr[2]);
//endTask

if(($a > $b) || ($a > $c)){

    $result =  $a ** 2;


    switch ($result) {
        case ($result == (($b ** 2) + ($c ** 2))) == true:
            echo 'Этот треугольник прямоугольный';

            break;
         case ($result == (($b ** 2) + ($c ** 2))) == false:
            echo 'Этот треугольник НЕ прямоугольный';

            break;
        default:
            break;
    }
    checkParams($aa, $bb, $cc);
}


elseif(($b > $a) || ($b > $c)){

   $result =  $b ** 2;
     switch ($result) {
        case ($result == (($a ** 2) + ($c ** 2))) == true:
            echo 'Этот треугольник прямоугольный';

            break;
         case ($result == (($a ** 2) + ($c ** 2))) == false:
            echo 'Этот треугольник НЕ прямоугольный';

            break;
        default:
            break;
    }
    checkParams($bb, $aa, $cc);
}


elseif(($c > $b) || ($c > $a)){

   $result =  $c ** 2;

      switch ($result) {
        case ($result == (($b ** 2) + ($a ** 2))) == true:
            echo 'Этот треугольник прямоугольный';

            break;
         case ($result == (($b ** 2) + ($a ** 2))) == false:
            echo 'Этот треугольник НЕ прямоугольный';

            break;
        default:
            break;
    }
    checkParams($cc, $bb, $aa);
} else {
    echo 'Этот треугольник НЕ прямоугольный';
}

function checkParams($aa, $bb, $cc) {
    if ($aa == $bb + $cc) {
        echo 'Этот треугольник прямоугольный';
    } else {
        echo 'Этот треугольник НЕ прямоугольный';
    }
}
