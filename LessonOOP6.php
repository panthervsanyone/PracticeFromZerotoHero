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

    public function setSalary()
    {
        return  $this->salary;
    }

    public function getSalary($salary)
    {
        return $this->salary = $salary .'$';
    }

    private function isAgeCorrect($age)
    {
        return $age >= 1 && $age <= 100;
    }
}

$obj = new Employee;
$obj->getName('Коля');
echo $obj->getAge(55).'<br>';
echo $obj->getSalary(2000).'<br>';



