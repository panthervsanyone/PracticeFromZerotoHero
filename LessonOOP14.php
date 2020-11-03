<?php

class Arr
{
    private $numbers = [];

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function add($number)
    {
        $this->numbers[] = $number;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}

$arr = new Arr([1,5,6]);
echo $arr->getSum();


