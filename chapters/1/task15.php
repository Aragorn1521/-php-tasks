<?php

/*
 * Дано целое число от 1 до 365. Определить, какой день недели выпадает на
 * это число, если 1 января – понедельник.
 */


$dayOfYear = 18;
$dayOfWeek = $dayOfYear % 7;


switch ($dayOfWeek) {
    case 1:
        echo 'Понедельник';
        break;
    case 2:
        echo 'Вторник';
        break;
    case 3:
        echo 'Среда';
        break;
    case 4:
        echo 'Четверг';
        break;
    case 5:
        echo 'Пятница';
        break;
    case 6:
        echo 'Суббота';
        break;
    case 7:
        echo 'Воскресенье';
        break;
    default:
        break;
}


