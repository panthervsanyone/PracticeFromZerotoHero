<?php

$arr = [1,2,3,4,5];
echo array_sum($arr)/count($arr).'<br>';

echo array_sum(range(1,100)) .'<br>';


$arr3 = range(1,100);
echo implode('<br>',$arr3).'<br>';

$arrForX = array_fill(0,10,'x');
print_r($arrForX);

$arrX =range(1,10);
shuffle($arrX);
var_dump($arrX);

$arrY = range(1,5);
echo array_product($arrY).'<br>';

$str = 'Hello World';
$str = strrev($str);
$str = ucfirst($str);
$str = strrev($str);
echo $str.'<br>';

$arrSmt = range(1,5);
$arrMap = array_map('sqrt',$arrSmt);
print_r($arrMap);
echo '<br>';

$arrKeys = range('a','z');
$arrValue = range(1,26);
print_r(array_combine($arrKeys,$arrValue));
echo '<br>';

$num = '456';
$arrForNum = str_split($num,1);
echo array_sum($arrForNum).'<br>';

$string = '1234567890';
$arrForStringSplit = str_split($string,2);
echo array_sum($arrForStringSplit).'<br>';
