<?php


echo 'URL: http://localhost/chapters/1/task7.php'.'<br>';

function scan ($dir){
    $d = opendir($dir);
    while (false !== ($name = readdir($d))){
        if($name == '.' or $name == '..') continue;
        if(is_dir($dir . '/' . $name)){
            echo "<b>"."["."<a href=$dir/$name> $name</a>"."]" ."</b>"."<br>";
            scan($dir . '/' . $name);
        }
 else {
     echo "<a href=$dir/$name> $name</a>"."<br>";
 }
    }
    closedir($d);    
}



scan('chapters');



