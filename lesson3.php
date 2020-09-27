<?php

$arr = ['a','b','c'];
var_dump($arr);

echo $arr[0],$arr[1],$arr[2].'<hr>';

$arr1 = ['a','b','c','d'];

echo "$arr1[0]".'+'."$arr1[1]".','."$arr1[2]".'+'."$arr1[3]" . '<hr>';

$arr = [2,5,3,9];

echo $result = $arr[0]*$arr[1]+$arr[2]*$arr[3]. '<hr>';

$arr2[] = 1;
$arr2[] = 2;
$arr2[] = 3;
$arr2[] = 4;
$arr2[] = 5;

print_r($arr2);
echo "<hr>";

$arr3 = ['a'=>1,'b'=>2,'c'=>3];
echo $arr3["c"].'<hr>';
echo array_sum($arr3).'<hr>';

$arrWage = ['Коля'=>'1000$','Вася'=>'500$','Петя'=>'200$'];
echo $arrWage['Петя'].' и '. $arrWage['Коля'] . '<hr>';


$days = ['mon'=>1,'tue'=>2,'wed'=>3,'thur'=>4,'fri'=>5,'sat'=>6,'sun'=>7];
echo $days['sun'].'<hr>';

$cms = [
    'cms'=>['joomla','wordpress','drupal'],
    'colors'=>['blue'=>'голубой','red'=>'красный','green'=>'зеленый']
];

echo $cms['cms'][0] .' '.' '.$cms['colors']['green'] . ' '. $cms['cms'][1] .' '.' '.$cms['colors']['blue'].'<hr>';

$daysRuEn = [
    'ru'=>['пн','вт','ср','чт','пт','сб','вс'],
    'en'=>['mon','tue','wed','thu','fri','sat','sun']
];

echo $daysRuEn['ru'][0] .' '. $daysRuEn['en'][2] . '<hr>';

$lang = ['ru','en'];
$day = range(1,7);


function day($lang,$day){
    if ($lang == 'ru' && $day == 1){
        echo 'Понедельник';
    }else if ($lang == 'en' && $day == 1){
        echo 'Monday';
    }else echo 'Другой день';

}

day('en','2');










