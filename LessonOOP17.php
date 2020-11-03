<?php

class User
{
    protected $name,$age;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        if (strlen($name) >= 3){
            $this->name = $name;
        }
    }

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }
    }
}

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function setAge($age)
    {
        if ($age <= 25) {
            parent::setAge($age);
        } else echo 'Sorry,wrong age';
    }

    public function setName($name)
    {
        if (strlen($name) < 10 )
        parent::setName($name);
    }
}

$student = new Student();

$student->setName('Roman');
$student->setAge(26);
$student->setCourse(3);

echo $student->getAge() .'<br>';
echo $student->getName();

