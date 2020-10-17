<?php

class Student
{
    private $name;
    private $course;

    public function __construct(
        $name)
    {
        $this->name = $name;
        $this->course = 2;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course .' курс';
    }

    public function transferToNextCourse()
    {
        if ( $this->getCourse() >=1 && $this->getCourse() < 5)
            $this->course++;
    }
}

