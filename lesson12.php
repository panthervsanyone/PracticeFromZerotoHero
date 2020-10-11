<?php

function pow2($a){
    return $a * $a;
}

echo pow2(2).'<br>';

function sum($a,$b){
    return $a + $b;
}

echo sum(1,2).'<br>';

function triple($a,$b,$c){
    return ($a - $b) /$c;
}

echo triple(5,2,3).'<br>';

function dayOfTheWeek($a){
    $day = ['sun','mon','tue','wed','thu','fri','sat'];
    return $day[$a-1];
}
echo dayOfTheWeek(1).'<br>';