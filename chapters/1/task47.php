<?php

/*Дано натуральное число. Найти сколько раз в нем встречается каждая цифра.
 * 
 */


$num = 14156672;

$arr = str_split($num);


//$newArr = array_count_values($arr);
//foreach ($newArr as $key => $value) {
//    echo 'Число '.$key.' Встречается ' .$value .' раз';
//    echo '<br>';
//    
//}




$new_array = [];
foreach ($arr as $value) {
    if(isset($new_array[$value]))
        $new_array[$value] ++;
    else
        $new_array[$value] = 1;
}
print_r($new_array);
//foreach ($new_array as $key => $value) {
//    echo $key;
//    if($value > 1)
//        echo "($value)";
//    echo "<br />";
//}




//$i = 0;
//$bb = 0;
//$cc = 0;
//$dd = 0;
//$ee = 0;
//$ff = 0;
//$jj = 0;
//$kk = 0;
//$gg = 0;
//foreach ($arr as $value) {
//    if($value == 1){
//        $i++;
//    }
//    if($value == 2){
//        $bb++;
//    }
//    if($value == 3){
//        $cc++;
//    }
//    if($value == 4){
//        $dd++;
//    }
//    if($value == 5){
//        $ee++;
//    }
//    if($value == 6){
//        $ff++;
//    }
//    if($value == 7){
//        $jj++;
//    }
//    if($value == 8){
//        $kk++;
//    }
//    if($value == 9){
//        $gg++;
//    }
//}
//print_r($arr);
//echo '<br>';
//if($i != 0){
//echo 'Число 1 встречается - '.$i.' раз';
//echo '<br>';
//}
//if($bb != 0){
//echo 'Число 2 встречается - '.$bb.' раз';
//echo '<br>';
//}
//if($cc != 0){
//echo 'Число 3 встречается -'.$cc.' раз';
//echo '<br>';
//}
//if($dd != 0){
//echo 'Число 4 встречается -'.$dd.' раз';
//echo '<br>';
//}
//if($ee != 0){
//echo 'Число 5 встречается -'.$ee.' раз';
//echo '<br>';
//}
//if($ff != 0){
//echo 'Число 6 встречается -'.$ff.' раз';
//echo '<br>';
//}
//if($jj != 0){
//echo 'Число 7 встречается -'.$jj.' раз';
//echo '<br>';
//}
//if($kk != 0){
//echo 'Число 8 встречается -'.$kk.' раз';
//echo '<br>';
//}
//if($gg != 0){
//echo 'Число 9 встречается -'.$gg.' раз';
//}