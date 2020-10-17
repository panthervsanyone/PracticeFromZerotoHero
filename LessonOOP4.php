<?php

class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)){
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

    private function isAgeCorrect($age)
    {
        return $age >= 18 && $age <= 60;
    }
}

class Student
{
    public $name;
    private $course;

    public function transferToNextCourse($course)
    {
        if ($this->isCourseCorrect($course))
        return $this->course = $course + 1;
    }

    private function isCourseCorrect($course)
    {
        return $course >= 1 && $course < 5;
    }
}

$x = new Student();
$x->name = 'Vasya';
echo $x->transferToNextCourse(1).'<br>';
