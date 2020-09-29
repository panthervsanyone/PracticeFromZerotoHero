<?php

$a = 10;
$b = 3;
echo $result = $a % $b.'<br>';

if ($result == 0){
    echo 'Делится'.'<br>';
} echo 'Делится с остатком'.'<br>';

echo pow(2,10).'<br>';

echo sqrt(245).'<br>';

$arr = [4,2,5,19,13,0,10];
$resultArr = 0;
foreach ($arr as $elem){
    $resultArr += $elem * $elem;
}
echo sqrt($resultArr).'<br>';


echo round(sqrt(379),0).'<br>';
echo round(sqrt(379),1).'<br>';
echo round(sqrt(379),2).'<br>';

$arrCF = [];
$q = ceil(sqrt(587)).'<br>';
$w = floor(sqrt(587)).'<br>';
$arrCF['ceil'] = $q;
$arrCF['floor'] = $w;
print_r($arrCF);
echo '<br>';

$task8 =[4,-2,5,19,-130,0,10];
echo 'Минимальное '.min($task8).', Максимальное '.max($task8).'<br>';

echo 'Рандомим '.mt_rand(1,100).'<br>';

$arrRand = [];
for ($i = 1; $i <=10 ;$i++){
    $arrRand[] = mt_rand(1,100);
}
var_dump($arrRand);
echo '<br>';

$i = 1;
$arrRandWhile = [];
while ($i++ <= 10){
    $arrRandWhile[] = mt_rand(1,20);
}
var_dump($arrRandWhile);
echo '<br>';

echo abs($a) - abs($b).'<br>';

$arrAbs = [1,2,-1,-2,3,-3];
$newArrAbs = [];
foreach ($arrAbs as $elem){
    $newArrAbs[] += abs($elem);
}
var_dump($newArrAbs);

$arrTask = [1,2,3,4,5,6,7,8,9,11];
$task = 0;
$i = 0;

foreach ($arrTask as $element){
    $i++;
    $task += $element;
    if ($task == 10){
        break;
    }
}
echo $i . '<br>';

$x = 30;
$arrX = [];

for ($i = 1;$i <= $x;$i++){
    if ($x % $i == 0){
        $arrX[] += $i ;
    }else
        continue;
}
print_r($arrX);




