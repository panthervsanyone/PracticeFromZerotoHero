<?php

$arr = [1,2,3,4,5];
echo count($arr).'<br>';
echo $arr[count($arr)-1].'<br>';

print_r(in_array(3,$arr));

echo array_sum($arr).'<br>';
echo array_product($arr).'<br>';

$arrNumb = range(1,100);
var_dump($arrChar = range('a','z'));
echo implode('-',range(1,9)).'<br>';


echo array_sum(range(1,100)).'<br>';
echo array_product(range(1,10)).'<br>';

$arr1 = [1,2,3];
$arr2 = ['a','b','c'];
var_dump(array_merge($arr1,$arr2));

var_dump(array_slice($arr,1,3));

$result = array_splice($arr,1,2);
var_dump($arr);

$arrVer1 = [1,2,3,4,5];
$resultVer1 = array_splice($arrVer1,1,3);
var_dump($resultVer1);

$arrVer2 = [1,2,3,4,5];
$resultVer2 = array_splice($arrVer2,2,0,['a','b','c']);
var_dump($arrVer2);

$arrVer3 = [1,2,3,4,5];
array_splice($arrVer3,1,0,['a','b']);
array_splice($arrVer3,5,0,['c']);
array_splice($arrVer3,7,0,['e']);
var_dump($arrVer3);

$arrVer4 = ['a'=>1,'b'=>2,'c'=>3];
$keys = array_keys($arrVer4);
$values = array_values($arrVer4);
var_dump(array_combine($keys,$values));

var_dump(array_flip($arrVer4));

var_dump(array_reverse($arrVer4));

$arrVer5 = ['a', '-', 'b', '-', 'c', '-', 'd'];
print_r(array_search('-',$arrVer5));

$arrNeed = array_search('-',$arrVer5);
array_splice($arrVer5,$arrNeed,1);
var_dump($arrVer5);

$arrVer6 = ['a','b','c','d','e'];
var_dump(array_replace($arrVer6,[0=>'!',3=>'!!']));


$arrWithSort = ['a'=>1, 'b'=>2, 'c'=>3];

krsort($arrWithSort);
var_dump($arrWithSort);

var_dump(array_rand($arrWithSort));

$valuesRand = array_rand($arrWithSort);
echo $arrWithSort[$valuesRand].'<br>';

$arrShuffle = range(1,25);
shuffle($arrShuffle);
var_dump($arrShuffle);

$arrShuffle2 = range('a','z');
shuffle($arrShuffle2);
var_dump($arrShuffle2);

$sixLetter = '';
for ($i = 1 ; $i <= 6; $i++){
    $sixLetter .= $arrShuffle2[$i];
}
var_dump($sixLetter);

$arrForUniq = ['a','b','c','b','a'];
var_dump(array_unique($arrForUniq));

$arrVerShiftPop = [1,2,3,4,5];
var_dump(array_shift($arrVerShiftPop));
var_dump(array_pop($arrVerShiftPop));
var_dump(array_unshift($arrVerShiftPop,0));
var_dump(array_push($arrVerShiftPop,6));

$arrForTask = [1,2,3,4,5,6,7,8];
$i = '';
while (0 < count($arrForTask)){
    $i .= array_shift($arrForTask);
    $i .= array_pop($arrForTask);
}
echo $i;

$arrForTask2 = ['a','b','c'];
var_dump(array_pad($arrForTask2,6,'-'));

$arrForTask3 = array_fill(0,10,'x');
var_dump($arrForTask3);

$arrForTask4 = range(1,20);
$arrForChunk = array_chunk($arrForTask4,4);
var_dump($arrForChunk);

var_dump(array_count_values(['a','b','c','b','c']));

$arrForMap = [1,2,3,4,5];
$arrMap = array_map("sqrt",$arrForMap);
$x = array_map("round",$arrMap);
var_dump($x);

$a = [' a ',' b ',' c '];
$b = array_map('trim',$a);
var_dump($b);

$z = ['<b>php</b>','<i>html</i>'];
$c = array_map('strip_tags',$z);
var_dump($c);

$arrExamp = [1,2,3,4,5];
$arrExamp2 = [3,4,5,6,7];
var_dump(array_intersect($arrExamp,$arrExamp2));
var_dump(array_diff($arrExamp,$arrExamp2));

$str = '123456789';
$strSplit = str_split($str);
echo array_sum($strSplit).'<br>';

$keysForLetter = range('a','z');
$keysForNumb = range(1,26);
print_r(array_combine($keysForLetter,$keysForNumb));
echo '<br>';

$c = range(1,9);
var_dump(array_chunk($c,3));

$arrExamp = ($arrExamp = array_unique($arrExamp))[count($arrExamp)-2];
var_dump($arrExamp);
