<?php


$text = 'abcde';
$text[0] = '!';
echo $text.'<hr>';


$num = '12345';
$arr = str_split($num);
echo array_sum($arr).'<hr>';





function secondInHour($b){
    //b = количество часов
    echo $b*60*60 .'<hr>';
}
secondInHour(3);

function secondInDay($a){
    echo $a * 60 * 60 * 24 .'секунд в '."$a".' сутках'.'<br>'.'<hr>';
}
secondInDay(2);


function secondInMonth($secInMonth){
    echo $secInMonth * 60 * 60 * 24 * 30 .' секунд в '. $secInMonth .' месяц(е,ах)'.'<hr>';
}
secondInMonth(4);



echo date("H:i:s").'<hr>';

function numberX2($x){
    echo $x * $x.'<hr>';
}
numberX2(2);


$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var .'<hr>';


$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' PHP!';
echo $text .'<hr>';

$var = 10;
$var++;
$var++;
$var--;
echo $var .'<hr>';


$var = 10;
$var +=  7;
$var++;
$var--;
$var += 12;
$var *=  7;
$var -=  15;
echo $var;