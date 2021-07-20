<?php

/*
 * Вычислить стоимость покупки с учетом скидки. Скидка в 10% 
 * предоставляется, если сумма покупки превышает 1000 гривен.
 */


$costWithoutDiscount = 900;

if($costWithoutDiscount >= 1000){
    $discount = $costWithoutDiscount * 0.10;
    $price = $costWithoutDiscount - $discount;
    echo $price;
}
 else {
    $price = $costWithoutDiscount;
    echo $price;
}
    


