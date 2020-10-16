<?php

class User
{
    public $name;
    public $age;

    public function isAgeCorrect($age)
    {
        return $age >= 18 && $age <= 60;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
         $this->age = $age;
        }
    }

    public function addAge($years)
    {
        $newAge = $this->age + $years;
        if ($this->isAgeCorrect($newAge)) {
         $this->age = $newAge;
        }
    }

    public function subAge($years)
    {
        $newAge = $this->age - $years;
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }
}

$user = new User();
$user->setAge(60);
echo $user->age.'<br>';

$user->setAge(20);
echo $user->age.'<br>';

$user->addAge(25);
echo $user->age.'<br>';

$user->subAge(10);
echo $user->age.'<br>';