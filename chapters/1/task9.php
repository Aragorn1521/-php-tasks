<?php


/* Введите массив символов из 15 элементов. Подсчитать количество
 * гласных русских букв.
 */

/*
 * С этим задание дого возился.Но было интересно) Потратил часа 2 на него.Проблемы были
 * из-за функции str_split и кодировки русских символов.Хотел использовать рекурсию,
 * но не стал.
 * Возможно я не правильно понял задание и в массиве не может быть эллементов
 * длинее 1 символа. в таком случае верное решение - 2 первых закоменнтированных
 * строки
 */




$arrayLetters = ['а','е','ё','и','о','у','э','ю','я'];
$arr = ['а','б','привет','a','как','д','е','дела','з','?','и','к','что','л','и','м','н','ооооч  '];
//$differentElements = array_diff($arr, $arrayLetters);
//$result = array_diff($arr, $differentElements);

function Check($arrayLetters,$arr){
    $differentElements = array_diff($arr, $arrayLetters);
    $results = array_diff($arr, $differentElements);
    
    $newResult = [];
    foreach ($arr as $value){
        if(mb_strlen($value)>1){
        $result = mb_str_split($value,1);
        $newResult[] = $result;
    } 
    }
    $ArrayWrite = ArrayWrite($newResult,$arrayLetters);
    
    $otvet = array_merge($results,$ArrayWrite);
  
    
    print_r($otvet);
      echo count($otvet);
}


function ArrayWrite ($newResult,$arrayLetters){
    $arrayOfElements = [];
    foreach ($newResult as $element){
        if(is_array($element) === true){
    $arrayOfElements = array_merge($arrayOfElements,$element);
    }
    }
    $differentElements = array_diff($arrayOfElements, $arrayLetters);
    $results = array_diff($arrayOfElements, $differentElements);
    return $results;

}
Check($arrayLetters, $arr);

