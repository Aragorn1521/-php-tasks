<?php

/*В заданной строке расположить в обратном порядке все слова. Разделителями 
 * слов считаются пробелы.
 */
$str = 'Привет. Как дела?';
$arr = explode(' ', $str);  
$reverse = array_reverse($arr);
echo implode(' ',$reverse);