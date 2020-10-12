<?php

class Employee2
{
    public $name;
    public $age;
    public $salary;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge()
    {
        if ($this->age > 18)
        {
            return true;
        } return false;
    }
}

$employee = new Employee2();
$employee ->age = 22;
$employee ->name = 'Artur';
$employee ->salary = 2000;

$employeeSecond = new Employee2();
$employeeSecond ->age = 20;
$employeeSecond ->name = 'Oleg';
$employeeSecond ->salary = 2000;

echo $employee->getSalary() + $employeeSecond->getSalary().'<br>';

class User
{
    public $name;
    public $age;

    public function setAge($age)
    {
        if ($this->age = $age >= 18)
        {
            return $this->age = $age;
        } return false;
    }

}

$user = new User();
$user->name = 'Коля';
$user->age = 25;
$user->setAge(30);

echo $user->setAge(18) .'<br>';

class EmployeeVer3
{
    public $name;
    public $salary;

    public function doubleSalary($salary)
    {
        return $this->salary = $salary * 2;
    }
}

$x = new EmployeeVer3();
$x->name = 'Рома';
$x->salary = 2000;
echo $x->doubleSalary(2000).'<br>';

class Rectangle
{
    public $height;
    public $width;

    public function getSquare()
    {
        return $this->height  * $this->width ;
    }

    public function getPerimeter()
    {
        return ($this->height + $this->width)*2;
    }
}

$rectangle = new Rectangle();
$rectangle->height = 10;
$rectangle->width = 10;

echo 'Площадь прямоугольника:'.$rectangle->getSquare().'<br>';
echo 'Периметр прямоугольника равен:'.$rectangle->getPerimeter().'<br>';


