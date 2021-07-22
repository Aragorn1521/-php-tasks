<?php

/* Определить лучшего форварда, и вывести сведения о футболистах, 
 * сыгравших менее 5-ти игр.
 * Фамилия Амплуа Возраст Количество игр Количество голов
 */
class footballers  {
    public $surname;
    public $age;
    public $numberOfGames;
    public  $numberOfHeads;
}

$akinfeev = new footballers();
$akinfeev->numberOfGames = 11;
$akinfeev->numberOfHeads = 0;
$akinfeev->age = 20;
$akinfeev->surname = 'Акинфеев';

$bistrov = new footballers();
$bistrov->age = 21;
$bistrov->numberOfGames = 1;
$bistrov->numberOfHeads = 0;
$bistrov->surname = 'Быстров';

$pavl = new footballers();
$pavl->numberOfGames = 11;
$pavl->numberOfHeads = 0;
$pavl->age = 22;
$pavl->surname = 'Павлюченко';

$dzy = new footballers();
$dzy->numberOfGames = 21;
$dzy->numberOfHeads = 1;
$dzy->age = 28;
$dzy->surname = 'Дзюба';

$game = 5;
echo 'Сведения о футболистах,сыгравших менее 5 игр :' .'<br>';
switch ($game) {
    case $bistrov->numberOfGames <= $game:
        print_r($bistrov);
        echo "<br>";
        
    case $akinfeev->numberOfGames <= $game:
        print_r($akinfeev);
        echo "<br>";
        
    case $pavl->numberOfGames <= $game:
        print_r($pavl);
        echo "<br>";
        
    case $dzy->numberOfGames <= $game:
        print_r($dzy);
        echo "<br>";
        

    default:
        break;
}
$max = max($akinfeev->numberOfHeads,$bistrov->numberOfHeads,$dzy->numberOfHeads,
        $pavl->numberOfHeads);
        
echo 'Лучший форвард:'.'<br>';
switch ($max) {
    case $bistrov->numberOfHeads == $max:
        print_r($bistrov);
        break;
    case $akinfeev->numberOfHeads == $max:
        print_r($akinfeev);
        break;
    case $dzy->numberOfHeads == $max:
        print_r($dzy);
        break;
    case $pavl->numberOfHeads == $max:
        print_r($pavl);
        break;

    default:
        break;
}