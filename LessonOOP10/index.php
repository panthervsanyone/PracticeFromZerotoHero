<?php

require_once "Student.php";

$student = new Student('Рома');
echo $student->getCourse().'<br>';
$student->transferToNextCourse();
echo $student->getCourse().'<br>';