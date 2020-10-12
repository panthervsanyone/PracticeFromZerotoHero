<?php

$arr = range(1,9);
foreach($arr as $elem){
    if ($elem == 5){
        echo 'есть'.'<br>';
    }
}

$a = 31;
$flag = true;
for ($i = 2;$i < $a;$i++){
    if ($a % $i === 0 ){
        $flag = false;
        break;
    }
}

if ($flag == false){
    echo 'Делится'.'<br>';
}else echo 'Не делится'.'<br>';

function check($a){
    for ($q=1; $q < array_count_values($a);$q++){
        if ($a[$q] === $a[$q-1]) {
            return true;
        }
    }
    return false;
}
echo check([3,1,2,3])? "Да":"Нет";