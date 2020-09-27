<?php
$a = null;

if ($a == 0){
    echo 'Верно ';
}else echo 'Неверно ';

if ($a > 0){
    echo 'Верно ';
}else echo 'Неверно ';

if ($a < 0){
    echo 'Верно ';
}else echo 'Неверно ';

if ($a >= 0){
    echo 'Верно ';
}else echo 'Неверно ';

if ($a <= 0){
    echo 'Верно ';
}else echo 'Неверно ';

if ($a === 1){
    echo 'Верно ';
}else echo 'Неверно ';

if ($a == 'test'){
    echo 'Верно ';
}else echo 'Неверно ';

if(empty($a)){
    echo 'Верно ';
}else echo 'Неверно ';

if(!empty($a)){
    echo 'Верно ';
}else echo 'Неверно ';

if(isset($a)){
    echo 'Верно ';
}else echo 'Неверно ';

if(!isset($a)){
    echo 'Верно ';
}else echo 'Неверно ';

$var = false;

if ($var == true){
    echo 'True ';
}else echo 'False ';

if ($var == true)
    echo 'Верно ';
else echo 'Неверно ';

if ($var != true) {
    echo 'True ';
}else echo 'False ';

if ($var != true)
    echo 'True ';
else echo 'False ';

$num = 4;
switch ($num){
    case $num == 1;
    echo $result = 'Зима';
    break;
    case $num == 2;
    echo $result = 'Весна';
    break;
    case $num == 3;
    echo $result = 'Лето';
    break;
    case $num == 4;
    echo $result = 'Осень';
    break;
}

$day = rand(1,51);
if ($day >= 1 && $day <= 10){
    echo 'Первая декада';
}elseif ($day >=11 && $day <= 20){
    echo 'Вторая декада';
}elseif ($day >= 21 && $day <= 31){
    echo 'Третья декада';
}else echo 'Мимо,укажи от 1 до 31';

switch ($day){
    case $day >= 1 && $day <= 10;
    echo 'Первая декада';
    break;
    case $day >=11 && $day <= 20;
    echo 'Вторая декада';
    break;
    case $day >= 21 && $day <= 31;
    echo 'Третья декада';
    break;
    default:  echo 'Укажи от 1 до 31';
}

$year = 394;

if ($year % 4 == 0 && $year % 100 !=0 || $year % 400 == 0 ){
    echo 'Високосный год ';
}else echo 'Не високосный ';

switch ($year){
    case $year % 4 == 0 && $year % 100 !=0 ||$year % 400 == 0;
    echo 'Високосный год';
    break;
    default: echo 'Не високосный год';
}

$string = 'abcde';
$stringArr = str_split($string);

if ($stringArr[0] = 'a'){
    echo 'Да ';
}else echo 'Нет ';

$number = '12345';
$numberArr = str_split($number);

if ($numberArr[0] == 1){
    echo 'Da ';
}else echo 'No ';

$n = '123';
$nSplit = str_split($n);
echo $nSum = array_sum($nSplit);

$x = '123124';
$xSplit = str_split($x);
if ($xSplit[0]+$xSplit[1]+$xSplit[2] == $xSplit[3] + $xSplit[4] + $xSplit[5]){
    echo 'Равны';
}else echo 'Не равны';


