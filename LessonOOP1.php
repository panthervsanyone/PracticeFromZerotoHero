<?php

class Employee
{
    public $name;
    public $age;
    public $salary;

}

$employee = new Employee();
$employee ->name = 'Иван';
$employee ->age = 25 ;
$employee ->salary = 1000 ;

$employee2 = new Employee();
$employee2 ->name = 'Вася';
$employee2 ->age = 26 ;
$employee2 ->salary = 2000 ;
echo $employee->salary + $employee2->salary.'<br>';
echo $employee->age + $employee2->age.'<br>';

class User
{
    public $name;
    public $age;

    public function show($str)
    {
        return $str . '!!!';
    }
}

$user = new User();
$user->name = 'Коля';
$user->age = 25;

echo $user->show('Hello').'<br>';