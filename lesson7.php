<?php

$str = 'php';
echo strtoupper($str) . '<br>';

$str1 = 'PHP';
echo strtolower($str) . '<br>';

$str2 = 'london';
echo ucfirst($str2). '<br>';

$str3 = 'London';
echo lcfirst($str3).'<br>';

$str4 = 'london is the capital of great britain';
echo ucwords($str4).'<br>';

$str5 = 'html css php';
echo strlen($str5).'<br>';

$password = 'qwerty';
if (strlen($password) > 5 && strlen($password) < 10){
    echo 'Пароль установлен'.'<br>';
}else echo 'Пароль должен быть не короче 5 символов и не больше 10'.'<br>';

echo substr($str5,9,12).'<br>';
echo substr($str5,-3,3).'<br>';

$str6 ='http://';
if (substr($str6,0,7) == 'http://'){
    echo 'yes'.'<br>';
}else echo 'no';

$str6 ='http://';
if (substr($str6,0,7) == 'http://' || substr($str6,0,8) == 'https://' ){
    echo 'yes'.'<br>';
}else echo 'no'.'<br>';

$str7 ='.png';
if (substr($str7,-4,4) == '.png'){
    echo 'yes'.'<br>';
}else echo 'no';

$str7 ='.png';
if (substr($str7,-4,4) == '.png' || substr($str7,-4,4) == '.jpg'){
    echo 'yes'.'<br>';
}else echo 'no';

$str8 ='qwerty';
if (strlen($str8) > 5){
   echo substr($str8,0,5) . '...'.'<br>';
} else
    echo $str8;

$str9 = '31.12.2020';
echo str_replace('.','-',$str9).'<br>';

$str10 = 'abc';
echo str_replace(['a','b','c'],[1,2,3],$str10).'<br>';

$str11 = '1a2b3c4b5d6e7f8g9h0';
echo str_replace(range(0,100),'',$str11).'<br>';

$str12 = 'abccbaabc';
echo strtr($str12,['a'=>1,'b'=>2,'c'=>3]).'<br>';
echo substr_replace($str12,'!!!',3,5).'<br>';

$strPos = 'http://...abc abc abc';
echo strpos($strPos,'b',1).'<br>';
echo strrpos($strPos,'b',1).'<br>';
echo strpos($strPos,'b',3).'<br>';

$firstSpace = strpos($strPos,' ');
echo strpos($strPos,' ',$firstSpace+1).'<br>';

if (strpos($strPos,'..') !== false){
    echo 'есть'.'<br>';
}else echo 'нет'.'<br>';

if (strpos($strPos,'http://.') === 0){
    echo 'есть'.'<br>';
}else echo 'нет'.'<br>';

$string = 'html css php';
$arr = explode(' ',$string);
print_r($arr);
echo '<br>';

$arrImp = implode(',',$arr);
echo $arrImp.'<br>';

$date = '2013-12-31';
$arrDate = explode('.',$date);
print_r($date);
echo '<br>';

$strsplit = '1234567890';
$str2split = str_split($strsplit,2);
print_r($str2split);
echo '<br>';
print_r(implode('-',$str2split));
echo '<br>';

print_r(str_split($strsplit,1));
echo '<br>';

$strForTrim = ' php ';
echo trim($strForTrim).'<br>';

$strForTrimWith = '/php/';
echo trim($strForTrim).'<br>';

$strForTrimR = 'слова слова слова.';
echo rtrim($strForTrimR,'.').'<br>';

$strForRev = '12345678';
echo strrev($strForRev).'<br>';

for ($i = strlen($strForRev-1); $i >=0; $i--){
    echo $strForRev[$i];
}
echo '<br>';

$strForShuffle = 'shuffle';
echo str_shuffle($strForShuffle).'<br>';

$strForShuffleAbc = 'abcdefghijlmnopqrstuvwxyz';
$strForShuffleAbcForSix = str_shuffle($strForShuffleAbc);
echo substr($strForShuffleAbcForSix,0,6).'<br>';

echo number_format($strForRev,0,' ',' ');

for ($i = 0;$i <= 9;$i++){
    echo str_repeat('x',$i).'<br>';
}

for ($i = 0,$x = 0;$i <= 9,$x <= 9;$i++,$x++){
    echo str_repeat($i,$x).'<br>';
}

$strFor43 = 'html,<b>php</b>,js';
echo strip_tags($strFor43).'<br>';
echo strip_tags($strFor43,'<b></b><i></i>').'<br>';
echo htmlspecialchars($strFor43).'<br>';

echo ord('a').'<br>';
echo ord('b').'<br>';
echo ord('c').'<br>';
echo ord(' ').'<br>';
echo chr(33).'<br>';
echo chr(mt_rand(65,90)).'<br>';

$len = 10;
$strForlen = '';
for ($i = 1; $i <= $len;$i++){
    $strForlen .= chr(mt_rand(97,122));
}
echo $strForlen .'<br>';

$letter = '1';
$letterForOrd = ord($letter);
if ( $letterForOrd >= 65 && $letterForOrd <= 90 ){
    echo 'Большая буква'.'<br>';
} elseif ($letterForOrd >= 97 && $letter <= 122){
    echo 'маленькая буква'.'<br>';
} else echo 'не буква'.'<br>';

$strForStrChr = 'ab-cd--ef';
echo strchr($strForStrChr,'-').'<br>';
echo strrchr($strForStrChr,'-').'<br>';
echo strstr($strForStrChr,'--').'<br>';

$task = 'empty_test_text';
$arrTask = explode('_',$task);
$strEmpty = '';
foreach ($arrTask as $key=>$elem){
    if ($key != 0) {
        $strEmpty .= ucfirst($elem);
    } else $strEmpty .= $elem;
}
echo $strEmpty .'<br>';

$taskWith3 = [1,2,3,23,22,30];
$x = [];
foreach ($taskWith3 as $item){
    if (strpos($item,'3') !== false){
        $x[] += $item;

    }else continue;
}
var_dump($x);










