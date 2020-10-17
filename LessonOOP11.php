<?php

class Arr
{
    private $numbers = [];

    public function add($num)
    {
        $this->numbers[] = $num;
    }

    public function getAvg()
    {
        return array_sum($this->numbers)/count($this->numbers);
    }
}

$arr = new Arr();
$arr->add(1);
$arr->add(3);
$arr->add(5);
echo $arr->getAvg();
