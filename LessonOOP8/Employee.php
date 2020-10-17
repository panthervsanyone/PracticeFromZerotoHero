<?php

class Employee
{
    public $name,$surname,$patronymic,$salary;

    public function __construct(
        $name,
        $surname,
        $salary,
        $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
        $this->patronymic = $patronymic;
    }

}
