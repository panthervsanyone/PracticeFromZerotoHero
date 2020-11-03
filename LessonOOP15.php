<?php

class Arr
{
    private $numbers = [];

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }

    public function append($arr)
    {
        $this->numbers = $arr;
        return $this;
    }
}

$arr = new Arr();
echo $arr->add(1)->add(2)->add(3)->getSum().'<br>';

echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();


