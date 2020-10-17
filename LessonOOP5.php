<?php

class Employee
{
    public $name,$age,$salary;

    public function __construct(
        $name,
        $age,
        $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

}

$emp = new Employee('Вася',25,1000);
$emp1 = new Employee('Петя',30,2000);
print_r($emp);
print_r($emp1);
echo '<br>';
echo  $emp->salary + $emp1->salary .' - сумма зарплат Пети и Васи';