<?php
//Задача 2
/*Рассчитать надбавку к зарплате за стаж, если стаж от 2 до 5 лет, надбавка
 * составляет 2%, если стаж от 5 до 10 лет - 5%.
 * Ввести с клавиатуры зарплату и стаж, вывести надбавку и сумму к выплате.
 */

$experience = 2;
$theSalary = 4378;
$allowance = 0;
if($experience >= 2 and $experience <= 5){
    $allowance = 0.02;
}
if($experience >= 6 and $experience <= 10){
    $allowance = 0.05;
}
$SalaryWithAllowance = $theSalary * $allowance;
echo $SalaryWithAllowance.' - надбавка<br>';
echo $SalaryWithAllowance + $theSalary.' - зарплата с надбавкой';