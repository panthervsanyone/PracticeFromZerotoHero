<?php

$str ='';
for ($i = 1;$i < 10;$i++){
    $str .= $i;
}
echo $str.'<br>';

$str1 = '';
for ($i = 9 ; $i >= 1;$i--){
    $str1 .= $i;
}
echo $str1.'<br>';

$str2 = '-';
for ($i = 1; $i <= 9; $i++){
    $str2 .= $i.'-';
}
echo $str2;

for ($i = 0;$i <= 20;$i++){
    echo str_repeat('x',$i).'<br>';
}

for ($i=1,$x=1;$i<=9,$x<=9;$i++,$x++){
    echo str_repeat($i,$x).'<br>';
}


for ($i = 2;$i <= 10;$i+=2){
    echo str_repeat('x',$i).'<br>';
}
