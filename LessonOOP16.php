<?php

class User
{
    private $name,$age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        return $this->age = $age;
    }
}

class Employee extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        return $this->salary = $salary;
    }
}

$employee = new Employee();

$employee->setSalary(1000);
$employee->setAge(25);
$employee->setName('Юра');

echo $employee->getSalary().' енотов'.'<br>';
echo $employee->getName().'<br>';
echo $employee->getage().' лет'.'<br>';

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        return $this->course = $course;
    }
}

$student = new Student;
$student->setCourse(3);
$student->setName('Радик');
$student->setAge(24);

echo $student->getCourse().' курс'.'<br>';
echo $student->getName().' его имя'.'<br>';
echo $student->getAge().' возраст Радика'.'<br>';

class Programmer extends Employee
{
    private $lang ;

    public function getLang()
    {
        return $this->lang;
    }

    public function setLang($lang)
    {
        return $this->lang[] = $lang;
    }
}

$programmer = new Programmer();
$programmer->setLang('PHP');
$programmer->setLang('Js');
$programmer->setLang('Java');
$programmer->setAge(24);
$programmer->setSalary(1500);

var_dump($programmer->getLang());
echo $programmer->getSalary().'<br>';

class Driver extends Employee
{
    private $exp,$category;

    public function getExp()
    {
        return $this->exp;
    }

    public function setExp($exp)
    {
        return $this->exp = $exp;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        return $this->category = $category;
    }
}

$driver = new Driver();
$driver->setCategory('B');
$driver->setExp(4);
$driver->setSalary(500);

echo $driver->getCategory().'<br>';
echo $driver->getExp().'<br>';
echo $driver->getSalary().'<br>';
