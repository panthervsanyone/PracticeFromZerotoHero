<?php

function arrayFill($a,$b){
    $arr = [];
    for ($i = 0;$i <= $b;$i++){
        $arr[] = $a;
    }
    print_r($arr);
}
arrayFill('x',5);

