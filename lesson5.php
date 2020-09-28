<?php

$arr = ['html','css','php','js'];

foreach ($arr as $elem ){
    echo $elem . '<br>';
}

$arrNum = [1,2,3,4,5,6];
$result = 0;

foreach ($arrNum as $numbers){
    $result = $result + $numbers;
}
echo $result . '<hr>';


$arrQ = [1,2,3,4,5];
$output = 0;
foreach ($arrQ as $elem){
    $output += pow($elem,2);

}
echo $output .'<hr>';

$colors = ['green'=>'зеленый','red'=>'красный','blue'=>'голубой'];

foreach ($colors as $key=>$col){
    echo $key.' - '.$col.'<br>';
}

$arrWage = ['Коля'=>200,'Вася'=>300,'Петя'=>400];

foreach ($arrWage as $key => $wage){
    echo $key.' - '.'зарплата '.$wage.' долларов'.'<br>';
}

$i = 0;
while ($i++<100){
    echo $i . '<br>';
}

for ($i = 0; $i <= 100; $i++){
    echo $i . '<br>';
}

$i = 10;
while ($i++<33){
    echo $i . '<br>';
}

for ($i = 11; $i <= 33; $i++){
    echo $i . '<br>';
}

$x = 0;
while ($x++<100){
    if ($x%2 == 1)
        continue;
    echo $x;
}

for ($x = 0; $x <= 100; $x++){
    if ($x%2 == 1)
        continue;
    echo $x.'<hr>';
}

$b = 0;
$sum = 0;
while ($sum++<100){
    $b += $sum;
}

echo 'Сумма чисел от 1 до 100 равна '. $b .'<br>';

$sum = 0;
for ($n = 0; $n <= 100; $n++){
    $sum += $n;
}
echo 'Сумма чисел от 1 до 100 равна ' . $sum.'<br>';

$task1 = [2,5,9,15,0,4];
foreach ($task1 as $cond){
    if ($cond > 3 && $cond <10){
        echo 'Эти числа '. $cond.' соответствует условиям '.'<br>';
    }
}

$list = 0;
$task2 = range(-10,10);
foreach ($task2 as $cond){
    if ($cond > 0){
        $list+=$cond;
    }
}
echo $list .'<br>';


$task3 = [1,2,5,9,4,13,4,10];
foreach ($task3 as $cond){
    if ( $cond == 4){
        echo 'Есть'.'<br>';
        break;
    }
}


$days = ['пн','вт','ср','чт','пт','сб','вскр'];
foreach ($days as $week){
    if ($week != 'сб' && $week != 'вскр'){
        echo $week .'<br>';
    }else echo '<strong>'. $week.'</strong>'.'<br>';
}

$num = [1,2,3,4,5,6,7,8,9];
foreach ($num as $elem){
    echo '-'.$elem;
}
echo '<br>';

foreach ($days as $week){
    if ($week == 'пн'){
        echo  '<i>'.$week.'</i>'.'<br>';
    }else echo $week.'<br>';
}

$x = [];
for ($i = 1; $i<=100; $i++){
    $x[] = $i;
}
var_dump($x);

$arrDay = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$ru = [];


foreach ($arrDay as $enCol => $ruCol){
    $en[] = $enCol;
    $ru[] = $ruCol;
}
print_r($en);
print_r($ru);


for ($num = 1000, $x = 0; $num > 50; $num /= 2,$x++){
    echo $num.' '.$x .'<hr>';
}



