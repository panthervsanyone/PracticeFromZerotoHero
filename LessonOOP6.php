<?php

class Employee
{
    private $name,$age,$salary;

    public function setName()
    {
        return $this->name;
    }

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age))
        return $newAge = $this->age ;
    }

    public function getAge($newAge)
    {
        if ($this->isAgeCorrect($newAge))
            return $newAge;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary  .'$';
    }

    private function isAgeCorrect($age)
    {
        return $age >= 1 && $age <= 100;
    }
}

$obj = new Employee;
$obj->getName('Коля');
echo $obj->getAge(55).'<br>';
echo $obj->getSalary().'<br>';



