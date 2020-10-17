<?php

class Employee
{
    private $name,$surname,$salary;

    public function __construct(
        $name,
        $surname,
        $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function getSurname($surname)
    {
        return $this->surname = $surname;
    }

    public function setSalary()
    {
        return $this->salary;
    }

    public function getSalary($salary)
    {
        return $this->salary = $salary;
    }

}

$member = new Employee('Толя','Корнев',2000);
