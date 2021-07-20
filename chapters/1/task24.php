<?php

/* Даны два натуральных числа. Определить , является хотя бы одно из них 
 * палиндромом( число, которое читается одинаково слева направо и справа налево), 
 * используя функцию распознавания таких чисел
 */
$a = "1661";
$b = "8881";
function palindrome ($a,$b){


$strrevA =  strrev($a);
$strrevB =  strrev($b);

if(($a == $strrevA) or ($b == $strrevB)){

    print "<br>palindrome";

} else {

    print "<br>Not palindrome"; 

}
}
palindrome($a, $b);