<?php

function checkIdent($a,$b){
    if ($a === $b){
        return 'True'.'<br>';
    }else return 'False'.'<br>';
}
echo checkIdent(3,2);

function sumMoreTen($a,$b){
    if ($a + $b > 10){
        return 'True'.'<br>';
    } return 'False'.'<br>';
}
echo sumMoreTen(5,10);

function plusOrMinus($a){
    if ($a < 0){
        return 'Отрицательное число';
    }elseif ($a > 0) {
        return 'Положительное число';
    } return 'Ноль';
}
echo plusOrMinus(0);