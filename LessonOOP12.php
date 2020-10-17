<?php

class City
{
    public $name,$foundation,$population;

    public function __construct(
        $name,
        $foundation,
        $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}

$city = new City('Kharkov',1654,1443207);
$props = ['name','foundation','population'];
foreach ($props as $prop){
     echo $city->$prop.'<br>';
}

class User
{
    public $surname;
    public $name;
    public $patronymic;

    public function __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
}

$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]} .' '. $user->{$props[1]} .' '.$user->{$props[2]}.'<br>';

$props2 = ['prop1'=>'surname','prop2'=>'name','prop3'=>'patronymic'];
echo $user->{$props2['prop1']};