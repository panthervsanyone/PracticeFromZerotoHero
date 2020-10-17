<?php

class User
{
    private $name,$age;

    public function __construct(
        $name,
        $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user = new User('Коля', 21);
$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $user->{$methods['method1']}().'<br>';
echo $user->{$methods['method2']}();