<?php

require_once "Employee.php";

$obj = new Employee('Дима','Волохай',1000,'Владимирович');
$obj2 = new Employee('Кирилл','Каруна',2000,'Борисович');
echo $obj->salary + $obj2->salary;