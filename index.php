<?php

echo 'URL для просмотра заданий: http://localhost/chapters/1/task7.php'.'<br>';

function scan ($dir, $tab){
    $d = opendir($dir);
    while (false !== ($name = readdir($d))){
        if($name == '.' or $name == '..') continue;
        if(is_dir($dir . '/' . $name)){
            echo "<b>".$tab."["."<a href=http://task/chapters/$name> $name</a>"."]" ."</b>"."<br>";
            scan($dir . '/' . $name,$tab .$nbsp.$nbsp.$nbsp.$nbsp);
        }
 else {
     echo $tab."<a href=http://task/chapters/1/$name> $name</a>"."<br>";
 }
    }
    closedir($d);    
}



scan('chapters', '');
echo $name;

